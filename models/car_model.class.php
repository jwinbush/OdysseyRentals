<?php
/**
 * Author: Matt Cool, Steven Casada, Jawon Winbush
 * Date: 11/17/2022
 * File: car_model.class.php
 * Description: define class to get car data from the database
 */

class CarModel
{

    //private data members
    private $db;
    private $dbConnection;
    static private $_instance = NULL;
    private $tblCar;
    private $tblCarCategories;

    //To use singleton pattern, this constructor is made private. To get an instance of the class, the getCarModel method must be called.
    private function __construct()
    {
        try {
            $this->db = Database::getInstance();
            $this->dbConnection = $this->db->getConnection();
            if (!$this->db || !$this->dbConnection) {
                throw new DatabaseExecutionException("There was a problem connecting to the database");
            }
            $this->tblCar = $this->db->getCarTable();
            $this->tblCarCategories = $this->db->getCarCategoriesTable();
            $this->tblCarUser = $this->db->getCarUsersTable();

        } catch (DatabaseExecutionException $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
            exit(1);
        } catch (Exception $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
            exit(1);
        }


        //Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars.
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        //Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // initialize
        if (!isset($_SESSION['car_category'])) {
            $categories = $this->get_car_category();
            $_SESSION['car_category'] = $categories;
        }
    }

    //static method to ensure there is just one CarModel instance
    public static function getCarModel()
    {
        if (self::$_instance == NULL) {
            self::$_instance = new CarModel();
        }
        return self::$_instance;
    }

    /*
     * the list_car method retrieves all cars from the database and
     * returns an array of car objects if successful or false if failed.
     */

    public function list_cars()
    {
        /* construct the sql SELECT statement in this format
         * SELECT ...
         * FROM ...
         * WHERE ...
         */


        $sql = "SELECT * FROM " . $this->tblCar . "," . $this->tblCarCategories .
            " WHERE " . $this->tblCar . ".category_id=" . $this->tblCarCategories . ".category_id";


        try {
            if (!$this->dbConnection) {
                throw new DatabaseExecutionException("Connection to the database could not be established.");
            }
            //execute the query
            $query = $this->dbConnection->query($sql);

            // if the query failed, return false.
            if (!$query)
                throw new DatabaseExecutionException("Error encountered when executing the SQL query");

            //if the query succeeded, but no car was found.
            if ($query->num_rows == 0)
                return 0;

            //handle the result
            //create an array to store all returned cars
            $cars = array();

            //loop through all rows in the returned recordsets
            while ($obj = $query->fetch_object()) {
                $car = new Car(stripslashes($obj->make), stripslashes($obj->model), stripslashes($obj->year), stripslashes($obj->image), stripslashes($obj->price), stripslashes($obj->description), stripslashes($obj->category), stripslashes($obj->amount));

                //set the id for the car
                $car->setId($obj->car_id);

                //add the car into the array
                $cars[] = $car;
            }
            return $cars;

        } catch (DatabaseExecutionException $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
        } catch (Exception $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
        }
    }

    public function list_categories()
    {
        /* construct the sql SELECT statement in this format
         * SELECT ...
         * FROM ...
         * WHERE ...
         */


        $sql = "SELECT * FROM " . $this->tblCarCategories;

        try {
            //execute the query
            $query = $this->dbConnection->query($sql);

            // if the query failed, throw an error.
            if (!$query)
                throw new DatabaseExecutionException("Error encountered when executing the SQL query");

            //if the query succeeded, but no car was found.
            if ($query->num_rows == 0)
                return 0;

            //handle the result
            //create an array to store all returned cars
            $cars = array();

            //loop through all rows in the returned recordsets
            while ($obj = $query->fetch_object()) {
                $category = new Category($obj->category_id, $obj->category);

                //add the category into the array
                $categories[] = $category;
            }
            return $categories;

        } catch (DatabaseExecutionException $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
        } catch (Exception $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
        }
    }

    /*
     * the viewCar method retrieves the details of the car specified by its id
     * and returns a car object. Return false if failed.
     */
    public function rent_car($car_id, $user_id)
    {
        $sql = "INSERT INTO `car_users` (`user_id`, `car_id`) VALUES ('$user_id', '$car_id');";

        $this->dbConnection->query($sql);

        $sql = "UPDATE `cars` SET `amount`= amount - 1 WHERE car_id='$car_id';";

        return $this->dbConnection->query($sql);
    }


    public function view_car($car_id)
    {
        //the select sql statement
        $sql = "SELECT * FROM " . $this->tblCar . "," . $this->tblCarCategories .
            " WHERE " . $this->tblCar . ".category_id=" . $this->tblCarCategories . ".category_id" .
            " AND " . $this->tblCar . ".car_id='$car_id'";

        try {
            //execute the query
            $query = $this->dbConnection->query($sql);

            // if the query failed, throw an error
            if (!$query) {
                throw new DatabaseExecutionException("Error encountered when executing the SQL query");
            }

            if ($query && $query->num_rows > 0) {
                $obj = $query->fetch_object();

                //create a car object
                $car = new Car(stripslashes($obj->make), stripslashes($obj->model), stripslashes($obj->year), stripslashes($obj->image), stripslashes($obj->price), stripslashes($obj->description), stripslashes($obj->category), stripslashes($obj->amount));

                //set the id for the car
                $car->setId($obj->car_id);

                return $car;
            }

            return false;
        } catch (DatabaseExecutionException $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
        } catch (Exception $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
        }
    }

    //search the database for flights that match words in titles. Return an array of movies if succeed; false otherwise.
    public function user_cars($user_id) {

        $sql = "SELECT * FROM " . $this->tblCar . ", " . $this->tblCarUser .
            " WHERE " . $this->tblCarUser . ".user_id='" . $user_id . "' AND " . $this->tblCarUser . ".car_id = " . $this->tblCar . ".car_id";

        //execute the query
        $query = $this->dbConnection->query($sql);

        // the search failed, return false.
        if (!$query)
            return false;

        //search succeeded, but no flight was found.
        if ($query->num_rows == 0)
            return 0;

        //search succeeded, and found at least 1 flight found.
        //create an array to store all the returned movies
        $cars = array();

        //loop through all rows in the returned recordsets
        while ($obj = $query->fetch_object()) {
            $car = new Car(stripslashes($obj->make), stripslashes($obj->model), stripslashes($obj->year), stripslashes($obj->image), stripslashes($obj->price), stripslashes($obj->description), stripslashes($obj->category), stripslashes($obj->amount));

            //set the id for the movie
            $car->setId($obj->car_id);

            //add the movie into the array
            $cars[] = $car;
        }
        return $cars;
    }

    //the update_car method updates an existing car in the database. Details of the car are posted in a form. Return true if succeed; false otherwise.
    public function update_car($car_id)
    {

        //if the script did not received post data, display an error message and then terminite the script immediately
        if (!filter_has_var(INPUT_POST, 'make') ||
            !filter_has_var(INPUT_POST, 'model') ||
            !filter_has_var(INPUT_POST, 'category_id') ||
            !filter_has_var(INPUT_POST, 'year') ||
            !filter_has_var(INPUT_POST, 'image') ||
            !filter_has_var(INPUT_POST, 'price') ||
            !filter_has_var(INPUT_POST, 'amount') ||
            !filter_has_var(INPUT_POST, 'description')) {

            return false;
        }

        //retrieve data for the new movie; data are sanitized and escaped for security.
        $make = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'make', FILTER_SANITIZE_STRING));
        $model = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING)));
        $category_id = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT)));
        $year = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'year', FILTER_DEFAULT));
        $image = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING)));
        $price = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT)));
        $amount = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_NUMBER_INT)));
        $description = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'description', FILTER_DEFAULT));


        //query string for update
        $sql = "UPDATE " . $this->tblCar .
            " SET make='$make', category_id='$category_id', model='$model', year='$year', image='$image',  price='$price', description='$description', amount='$amount' WHERE car_id='$car_id'";

        //execute the query
        return $this->dbConnection->query($sql);


    }

    //search the database for cars that match words in titles. Return an array of cars if succeed; false otherwise.
    public function search_car($terms)
    {
        $terms = explode(" ", $terms); //explode multiple terms into an array
        //select statement for AND search
        $sql = "SELECT * FROM " . $this->tblCar . "," . $this->tblCarCategories .
            " WHERE " . $this->tblCar . ".category_id=" . $this->tblCarCategories . ".category_id AND (1";

        foreach ($terms as $term) {
            $sql .= " AND model LIKE '%" . $term . "%' OR make LIKE '" . $term . "%' OR category LIKE '" . $term . "%'";
        }

        $sql .= ")";

        try {

            //execute the query
            $query = $this->dbConnection->query($sql);

            // the search failed, return false.
            if (!$query)
                throw new DatabaseExecutionException("An error occurred while searching the database");

            //search succeeded, but no car was found.
            if ($query->num_rows == 0)
                return 0;

            //search succeeded, and found at least 1 car found.
            //create an array to store all the returned cars
            $cars = array();

            //loop through all rows in the returned recordsets
            while ($obj = $query->fetch_object()) {
                $car = new Car($obj->make, $obj->model, $obj->year, $obj->image, $obj->price, $obj->description, $obj->category, $obj->amount);

                //set the id for the car
                $car->setId($obj->car_id);

                //add the car into the array
                $cars[] = $car;
            }
            return $cars;
        } catch (DatabaseExecutionException $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
        } catch (Exception $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
        }
    }

    public function add_car($car_id)
    {
        //check if there are post values
        if (!filter_has_var(INPUT_POST, 'make') ||
            !filter_has_var(INPUT_POST, 'model') ||
            !filter_has_var(INPUT_POST, 'category_id') ||
            !filter_has_var(INPUT_POST, 'year') ||
            !filter_has_var(INPUT_POST, 'image') ||
            !filter_has_var(INPUT_POST, 'price') ||
            !filter_has_var(INPUT_POST, 'amount') ||
            !filter_has_var(INPUT_POST, 'description')) {

            return false;
        }

        //retrieve data for the new movie; data are sanitized and escaped for security.
        $make = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'make', FILTER_SANITIZE_STRING));
        $model = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING)));
        $category = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT)));
        $year = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'year', FILTER_DEFAULT));
        $image = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'image', FILTER_SANITIZE_URL)));
        $price = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT)));
        $amount = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_NUMBER_INT)));
        $description = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'description', FILTER_DEFAULT));


        $sql = "INSERT INTO `cars`(`car_id`, `make`, `model`, `year`, `image`, `description`, `amount`, `category_id`)
                VALUES (NULL,'" . $make . "', '" . $model . "', '" . $year . "', '" . $image . "','" . $description . "', 5 ,'" . $category . "')";

        //execute the query
        return $this->dbConnection->query($sql);
//
//        try {
//            // the search failed, return false.
//            if (!$query) {
//                throw new QueryDatabaseException;
//            }
//
//            //search succeeded, but no flight was found.
//            if ($query->num_rows == 0) {
//                throw new PlaneNumAuthenticationException;
//            }
//
//        } catch (QueryDatabaseException $e) {
//            $message = $e->getDetails();
//            include('application/error.php');
//            exit();
//
//        } catch (PlaneNumAuthenticationException $e) {
//            $message = $e->getDetails();
//            include('application/error.php');
//            exit();
//        }

//        //create insert sql statement
//        $sql = "INSERT INTO `cars`
//                (`car_id`, `category_id`, `image`, `description`, `price`, `make`, `model`, `year`, `amount`)
//                 VALUES (NULL,'$category','$image','$description ','$price','$make','$model','$year', 5)";
//
////        //run query
//        return $this->dbConnection->query($sql);
    }

    public function delete_cars($car_id)
    {
        $sql = "DELETE FROM `cars` WHERE car_id = '" . $car_id . "'";

        //execute the query
        $this->dbConnection->query($sql);
    }

    //get the car categories
    private function get_car_category()
    {
        $sql = "SELECT * FROM " . $this->tblCarCategories;

        try {
            //execute the query
            $query = $this->dbConnection->query($sql);

            if (!$query) {
                throw new DatabaseExecutionException("An error occurred while fetching the car categories table.");
            }

            //loop through all rows
            $categories = array();
            while ($obj = $query->fetch_object()) {
                $category[$obj->category] = $obj->category_id;
            }
            return $categories;
        } catch (DatabaseExecutionException $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
        } catch (Exception $exc) {
            $view = new CarError();
            $view->display($exc->getMessage());
        }
    }
}