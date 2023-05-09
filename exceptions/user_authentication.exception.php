<?php
/**
 * Author: Hannah Mayorga
 * Date: 4/27/2022
 * File: user_authentication.exception.php
 * Description:
 */
class UserAuthenticationException extends Exception {
    public function getDetails() {
        return "User Authentication Failed. Please try again";
    }
}