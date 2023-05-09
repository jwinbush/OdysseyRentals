<?php

/* Author: Matt Cool, Steven Casada, Jawon Winbush
 * Date: 11/8/22
 * Name: database.class.php
 * Description: 
 */

class Database {

    //define database parameters
    private $param = array(
        'host' => 'localhost',
        'login' => 'root',
        'password' => '',
        'database' => 'rentalcar_db',
        'tblUser' => 'users',
        'tblCar' => 'cars',
        'tblCarUser' => 'car_users',
        'tblCarCategories' => 'car_categories',
        'tblInventory' => 'inventory'
    );
    //define the database connection object
    private $objDBConnection = NULL;
    static private $_instance = NULL;

    //constructor
    private function __construct() {
        $this->objDBConnection = @new mysqli(
            $this->param['host'], $this->param['login'], $this->param['password'], $this->param['database']
        );

        try {
            if (mysqli_connect_errno() != 0) {
                throw new DatabaseException();
            }
        } catch (DatabaseException $e) {
            $message = $e->getDetails();
            include('application/error.php');
            exit();
        }
    }

    //static method to ensure there is just one Database instance
    static public function getInstance() {
        if (self::$_instance == NULL) {
            self::$_instance = new Database();
        }
        return self::$_instance;
    }

    //this function returns the database connection object
    public function getConnection() {
        try {
            if ($this->objDBConnection) {
                return $this->objDBConnection;
                // exit();
            } else {
                throw new DatabaseException();
            }
        } catch (DatabaseException $e) {
            $message = $e->getDetails();
            include('application/error.php');
            exit();
        }
    }

    //returns the name of the table storing users
    public function getUserTable() {
        return $this->param['tblUser'];
    }

    // returns the name of the table storing cars
    public function getCarTable() {
        return $this->param['tblCar'];
    }

    // returns the name of the table storing car category
    public function getCarCategoriesTable() {
        return $this->param['tblCarCategories'];
    }

    // returns the name of the table storing car category
    public function getCarUsersTable() {
        return $this->param['tblCarUser'];
    }


    // returns the name of the table storing inventory
    public function getInventory() {
        return $this->param['tblInventory'];
    }

}