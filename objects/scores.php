<?php

class Scores{

 
     // database connection and table name
    /* private $conn;
     private $table_name = "enem_scores"; */
 
    // object properties
    public $essay;
    public $math;
    public $language;
    public $nature;
    public $social;
    
    // constructor with $db as database connection
    /* public function __construct($db){
        $this->conn = $db;
    }*/


    // constructor without database connection
    public function __construct(){
        //do what you need
    }
}
?>