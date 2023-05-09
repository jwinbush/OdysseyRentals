<?php

/* Author: Matt Cool, Steven Casada, Jawon Winbush
* Date: 12/6/22
 * user_controller.class.php
 * Controls methods for the user class
 */


class UserController {

    //creates user model variable
    private $user_model;

    //default constructor
    public function __construct() {
        //create an instance of the UserModel class
        $this->user_model = UserModel::getUserModel();
    }

    public function login() {
        $view = new UserLogin();
        $view->display();
    }

    public function verify() {
        //retrieve query terms from search form
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        //search the database for matching movies
        $user = $this->user_model->verify_user($email, $password);

        if ($user === false) {
            //handle error
            $message = "An error has occurred.";
            $this->error($message);

            return;
        }

        if ($user === 0) {
            header("Location:" . BASE_URL . "/user/login?message=failed"); /* Redirect browser */
            exit();
        }

        header("Location:" . BASE_URL . "/user/detail/" . $user->getUserId()); /* Redirect browser */
        exit();

    }

    public function detail($user_id) {
        $user = $this->user_model->view_user($user_id);

        if (!$user) {
            //display an error
            $message = "There was a problem displaying the user user_id='" . $user_id . "'.";
            $this->error($message);
            return;
        }

        $view = new UserDetail();
        $view->display($user);
    }

    public function edit($user_id) {
        $user = $this->user_model->view_user($user_id);

        if (!$user) {
            //display an error
            $message = "There was a problem displaying the user user_id='" . $user_id . "'.";
            $this->error($message);
            return;
        }

        $view = new UserEdit();
        $view->display($user);
    }

    public function update($user_id) {
        //update the user
        $update = $this->user_model->update_user($user_id);

        if (!$update) {
            //handle errors
            $message = "There was a problem updating the user id='" . $user_id . "'.";
            $this->error($message);
            return;
        }

        //display the updated user details
        $user = $this->user_model->view_user($user_id);

        $view = new UserDetail();
        $view->display($user);
    }

    public function create() {
        $view = new UserCreate();
        $view->display();
    }

    public function add() {
        //update the user
        $add = $this->user_model->add_user();

        if (!$add) {
            //handle errors
            $message = "There was a problem creating your account";
            $this->error($message);
            return;
        }

        $this->verify();
    }

    public function logout() {



        session_start();

        //1. unset all the session variables
        $_SESSION = array();
        $view = new UserLogout();
        $view->display();
        //2. delete the session cookie
        setcookie(session_name('user_id'), '', time()-3600);
        setcookie(session_name('isAdmin'), '', time()-3600);

        //3. destroy the session
        session_destroy();

        header("Location:" . BASE_URL . "/user/login"); /* Redirect browser */
        exit();

    }

    public function delete($user_id) {
        $this->user_model->delete_user($user_id);

        session_start();

        //1. unset all the session variables
        $_SESSION = array();

        //2. delete the session cookie
        setcookie(session_name('user_id'), '', time()-3600);
        setcookie(session_name('isAdmin'), '', time()-3600);

        //3. destroy the session
        session_destroy();

        header("Location:" . BASE_URL . "/user/login/"); /* Redirect browser */
        exit();
    }


//    //index action that displays all users
//    public function index() {
//        //retrieve all users and store them in an array
//        $users = $this->user_model->list_user();
//
//        if (!$users) {
//            //display an error
//            $message = "There was a problem displaying users.";
//            $this->error($message);
//            return;
//        }
//
//        // display all users
//        $view = new UserIndex();
//        $view->display($users);
//    }





}