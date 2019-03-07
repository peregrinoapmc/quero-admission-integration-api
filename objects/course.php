<?php

include 'offer.php';

class Course{

 
     // database connection and table name
    /* private $conn;
     private $table_name = "courses"; */
 
    // object properties
    public $id_institution_system;
    public $offer;
 
    // constructor with $db as database connection
    /* public function __construct($db){
        $this->conn = $db;
    }*/


    // constructor without database connection
    public function __construct(){
        //do what you need
        $this->offer = new Offer();
    }
}
?>