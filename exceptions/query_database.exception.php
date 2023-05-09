<?php

class QueryDatabaseException extends Exception {
    public function getDetails() {
        return "Query failed, items could not be retrieved.";
    }
}