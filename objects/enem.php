<?php

include 'scores.php';

class Enem{

     // database connection and table name
    /* private $conn;
     private $table_name = "enem_records"; */
 
    // object properties
    public $year;
    public $scores;
 
    // constructor with $db as database connection
    /* public function __construct($db){
        $this->conn = $db;
    }*/


    // constructor without database connection
    public function __construct(){
        //do what you need
        $this->scores = new Scores();
    }
}
?>