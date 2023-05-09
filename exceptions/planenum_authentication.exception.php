<?php

class PlaneNumAuthenticationException extends Exception {
    public function getDetails() {
        return "Plane Number does not exist, please enter a valid plane number.";
    }
}