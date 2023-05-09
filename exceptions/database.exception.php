<?php
/**
 * Author: Hannah Mayorga
 * Date: 4/27/2022
 * File: database.exception.php
 * Description:
 */
class DatabaseException extends Exception {
    public function getDetails() {
        return "Fatal Error: Database Connection Failed";
    }
}