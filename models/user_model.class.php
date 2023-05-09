<?php

/**
* Date: 12/6/22
 * user_controller.class.php
 * Controls methods for the user class
 */

class UserModel {

    //private data members
    private $db;
    private $dbConnection;
    static private $_instance = NULL;
    private $tblUser;
    //the constructor. It initializes two data members.

    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
        $this->tblUser = $this->db->getUserTable();

        //Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars.
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        //Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }
    }

    //static method to ensure there is just one MovieModel instance
    public static function getUserModel() {
        if (self::$_instance == NULL) {
            self::$_instance = new UserModel();
        }
        return self::$_instance;
    }

    public function verify_user($email, $password) {
        $sql = "SELECT * FROM " . $this->tblUser .
            " WHERE email='" . $email . "' AND password='" . $password . "'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        // the search failed, return false.
        if (!$query)
            return false;

        //search succeeded, but no user was found.
        if ($query->num_rows == 0)
            return 0;

        $obj = $query->fetch_object();

        //create new user object
        $user = new User($obj->isAdmin, $obj->email, $obj->password, $obj->firstname, $obj->lastname);

        //set the userNum for the user
        $user->setUserId($obj->user_id);

        session_start();

        $_SESSION['user_id'] = $obj->user_id;
        $_SESSION['isAdmin'] = $obj->isAdmin;


        return $user;
    }

    public function view_user($user_id) {
        $sql = "SELECT * FROM " . $this->tblUser .
            " WHERE user_id='" . $user_id . "'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        // the search failed, return false.
        if (!$query)
            return false;

        //search succeeded, but no user was found.
        if ($query->num_rows == 0)
            return 0;

        $obj = $query->fetch_object();

        //create new user object
        $user = new User($obj->isAdmin, $obj->email, $obj->password, $obj->firstname, $obj->lastname);

        //set the userNum for the user
        $user->setUserId($obj->user_id);

        return $user;
    }


    public function update_user($user_id) {
        //if the script did not receive post data, display an error message and then terminite the script immediately
        if (!filter_has_var(INPUT_POST, 'firstname') ||
            !filter_has_var(INPUT_POST, 'lastname') ||
            !filter_has_var(INPUT_POST, 'email') ||
            !filter_has_var(INPUT_POST, 'password')) {

            return false;
        }

        //retrieve data for the new book; data are sanitized and escaped for security.
        $firstname = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING)));
        $lastname = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING)));
        $email = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'email', FILTER_DEFAULT));
        $password = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'password', FILTER_DEFAULT));

        //query string for update
        $sql = "UPDATE " . $this->tblUser .
            " SET firstname='$firstname', lastname='$lastname', email='$email', "
            . "password='$password' WHERE user_id='$user_id'";

        //execute the query
        return $this->dbConnection->query($sql);
    }

    public function add_user() {
        //if the script did not receive post data, display an error message and then end the script immediately
        if (!filter_has_var(INPUT_POST, 'firstname') ||
            !filter_has_var(INPUT_POST, 'lastname') ||
            !filter_has_var(INPUT_POST, 'email') ||
            !filter_has_var(INPUT_POST, 'password')) {

            return false;
        }

        //retrieve data for the new movie; data are sanitized and escaped for security.
        $firstname = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING)));
        $lastname = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING)));
        $email = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'email', FILTER_DEFAULT));
        $password = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'password', FILTER_DEFAULT));


        try {
            if (!preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/i", $email)) {
                throw new EmailException();
            }
        } catch (EmailException $e){
            $message = $e->getDetails();
            include('application/error.php');
            exit();
        }

        //query string for update
        $sql = "INSERT INTO `users` (`user_id`, `isAdmin`, `email`, `password`, `firstname`, `lastname`, `car_id`)
                VALUES (null,'no','". $email . "','" . $password . "','" . $firstname . "','" . $lastname . "', null)";

        //execute the query
        return $this->dbConnection->query($sql);
    }

    public function delete_user($user_id) {
        $sql = "DELETE FROM `users` WHERE user_id = '" . $user_id . "'";

        //execute the query
        $this->dbConnection->query($sql);
    }

}