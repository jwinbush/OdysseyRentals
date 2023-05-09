<?php
/**
 * Date: 12/6/2022
 * File: user.class.php
 * Description: define a class that describes user data
 */

class User {

    private $user_id, $firstname, $lastname, $email, $password, $role;

    public function __construct($firstname, $lastname, $email, $password, $role) {

        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getUserId() {
        return $this->user_id;
    }
    public function getFirstName() {
        return $this->firstname;
    }
    public function getLastName() {
        return $this->lastname;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getRole() {
        return $this->role;
    }


    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

}