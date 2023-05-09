<?php

/* Author: Matt Cool, Steven Casada, Jawon Winbush
* Date: 11/16/22
 * car_controller.class.php
 * perform the functions of the various class pages
 */

class CarController {
    private $car_model;

    // define constructor
    public function __construct()
    {
        // create an instance of the CarModel
        $this->car_model = CarModel::getCarModel();
    }

    // index directory that lists all the cars
    public function index()
    {
        // get all the cars and return then in an array
        $cars = $this->car_model->list_cars();

        if (!$cars) {
            //display an error
            $message = "There was a problem displaying cars.";
            $this->error($message);
            return;
        }

        // display cars
        $view = new CarIndex();
        $view->display($cars);
    }

    public function update($car_id) {
        //update the user
        $update = $this->car_model->update_car($car_id);

        if (!$update) {
            //handle errors
            $message = "There was a problem updating the car id='" . $car_id . "'.";
            $this->error($message);
            return;
        }

        //display the updated flight details
        $car = $this->car_model->view_car($car_id);

        $view = new CarDetail();
        $view->display($car);
    }

    //show details of a car
    public function detail($id) {
        //retrieve the specific movie
        $car = $this->car_model->view_car($id);

        if (!$car) {
            //display an error
            $message = "There was a problem displaying the car with an id='" . $id . "'.";
            $this->error($message);
            return;
        }

        //display car details
        $view = new CarDetail();
        $view->display($car);
    }


    public function add() {
        //add the user
        $add = $this->car_model->add_car();

        if (!$add) {
            //handle errors
            $message = "There was a problem creating the car.";
            $this->error($message);
            return;
        }

        //run controller's index function
        $this->index();
    }

    public function edit($car_id) {
        //retrieve the specific flight
        $car = $this->car_model->view_car($car_id);

        if (!$car) {
            //display an error
            $message = "There was a problem displaying the car car_id='" . $car_id . "'.";
            $this->error($message);
            return;
        }

        //display flights details
        $view = new CarEdit();
        $view->display($car);
    }

    public function delete($car_id) {
        $this->car_model->delete_cars($car_id);

        header("Location:" . BASE_URL . "/car/index"); /* Redirect browser */
        exit();
    }


    //search for a car
    public function search()
    {
        //retrieves terms from the search box
        $query_terms = trim($_GET['query-terms']);

        //if search box is empty, all cars are listed
        if ($query_terms == "") {
            $this->index();
        }

        //search for matching cars in the database
        $cars = $this->car_model->search_car($query_terms);

        if ($cars === false) {
            //error display
            $message = "There was an error in the search query.";
            $this->error($message);
            return;
        }

        if ($cars === 0) {
            $search = new CarSearch();
            $search->display($query_terms, $cars);
        } else {
            //matched cars for display
            $search = new CarSearch();
            $search->display($query_terms, $cars);
        }
    }


    //autosuggest feature
    public function suggest($terms)
    {
        //retrieve query terms
        $query_terms = urldecode(trim($terms));
        $cars = $this->car_model->search_car($query_terms);

        //retrieve all cars to be stored in following array
        $info = array();
        if ($cars) {
            foreach ($cars as $car) {
                $info[] = $car->getMake() . " ".$car->getModel();
            }
        }

        echo json_encode($info);
    }

    //to handle and display all types of errors
    public function error($message)
    {
        //creates Error class object
        $error = new CarError();

        //display errors on page
        $error->display($message);
    }

    //search flights
    public function user($user_id) {
        //search the database for matching flights
        $cars = $this->car_model->user_cars($user_id);

        if ($cars === false) {
            //handle error
            $message = "An error has occurred.";
            $this->error($message);
            return;
        }

        //display matched flights
        $search = new CarUser();
        $search->display($cars);
    }

    //assign user to car
    public function rent($car_id) {
        session_start();

        if (isset($_SESSION['user_id'])
            && isset($_SESSION['isAdmin'])) {

            $user_id = $_SESSION['user_id'];
            $admin = $_SESSION['isAdmin'];
        } else {
            header(BASE_URL . "/user/login");
            exit();
        }

        //retrieve the specific flight
        $rent = $this->car_model->rent_car($car_id, $user_id);

        if (!$rent) {
            //handle errors
            $message = "There was a problem purchase a car on the car num='" . $car_id . "'.";
            $this->error($message);
            return;
        }

        self::user($user_id);
    }

    public function create() {
        $create = new CarCreate();
        $create->display();
    }



//    // add new car to the database
//    public function create()
//    {
//        try {
//            //if the script did not receive post data, display an error message and then terminate the script immediately
//            if (!filter_has_var(INPUT_POST, 'id') ||
//                !filter_has_var(INPUT_POST, 'category') ||
//                !filter_has_var(INPUT_POST, 'make') ||
//                !filter_has_var(INPUT_POST, 'model') ||
//                !filter_has_var(INPUT_POST, 'year') ||
//                !filter_has_var(INPUT_POST, 'price') ||
//                !filter_has_var(INPUT_POST, 'image') ||
//                !filter_has_var(INPUT_POST, 'description')) {
//
//                throw new DataMissingException("A required field is missing");
//            }
//
//            $id = filter_input(INPUT_POST, 'id');
//            $category = filter_input(INPUT_POST, 'category');
//            $make = filter_input(INPUT_POST, 'make');
//            $model = filter_input(INPUT_POST, 'model');
//            $year = filter_input(INPUT_POST, 'year');
//            $price = filter_input(INPUT_POST, 'price');
//            $image = filter_input(INPUT_POST, 'image');
//            $description = filter_input(INPUT_POST, 'description');
//
//            $this->car_model->create($id, $category, $image, $description, $price, $make, $model, $year);
//
//            $car = new Car($make, $model, $year, $image, $price, $description, $category);
//
//            $view = new CarDetail();
//            $view->display($car);
//        }
//        catch(DataMissingException $exc) {
//            $view = new CarError();
//            $view->display($exc->getMessage());
//        }
//        catch (Exception $exc) {
//            $view = new CarError();
//            $view->display($exc->getMessage());
//        }
//    }
//
//    public function update($id){
//        if (!filter_has_var(INPUT_POST, 'id') ||
//            !filter_has_var(INPUT_POST, 'category') ||
//            !filter_has_var(INPUT_POST, 'make') ||
//            !filter_has_var(INPUT_POST, 'model') ||
//            !filter_has_var(INPUT_POST, 'year') ||
//            !filter_has_var(INPUT_POST, 'price') ||
//            !filter_has_var(INPUT_POST, 'image') ||
//            !filter_has_var(INPUT_POST, 'description')) {
//
//            return false;
//        }
//
//        $id = filter_input(INPUT_POST, 'id');
//        $category = filter_input(INPUT_POST, 'category');
//        $make = filter_input(INPUT_POST, 'make');
//        $model = filter_input(INPUT_POST, 'model');
//        $year = filter_input(INPUT_POST, 'year');
//        $price = filter_input(INPUT_POST, 'price');
//        $image = filter_input(INPUT_POST, 'image');
//        $description = filter_input(INPUT_POST, 'description');
//
//        $this->car_model->update_car($id, $category, $make, $model, $year, $price, $image, $description);
//
//        $car = new Car($category, $make, $model, $year, $image, $price, $description);
//
//        $view = new CarDetail();
//        $view->display($car);
//
//
//
//    }


    //handle calling inaccessible methods
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        $message = "Calling method '$name' caused errors. Route does not exist.";

        $this->error($message);
    }

}