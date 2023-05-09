<?php

class EmailException extends Exception
{
    public function getDetails() {
        return "Invalid Email.";
    }
}