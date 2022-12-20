<?php
/*
* Author: Matt Cool, Steven Casada, Jawon Winbush
* Date: 12/7/22
* Name: login.class.php
* Description: Create the form that lets the user login
*/
class Login extends View{
    public function display(){
        //display header
        parent::header();
        ?>
        <div class="top-row">Login</div>

        <form action="../../index.php" class="login-form form">
            <input type="email" name="email" required class="input error-input" placeholder="Email">
            <input class="input" type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" placeholder="Register">
            <div class="form-link-holder">
                Don't you have an account?
                <a href="">Signup</a>
            </div>
        </form>
        <!--Display the links-->
        <div class="bottom-row">
            <span style="float: left">Don't have an account? <a href="../../index.php">Register</a></span>
        </div>
        <?php

        //display footer
        parent::footer();
    }
}