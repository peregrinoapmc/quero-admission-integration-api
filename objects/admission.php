<?php

include 'course.php';

class Admission{
 
     // database connection and table name
    /* private $conn;
     private $table_name = "admissions"; */
 
    // object properties
    public $id_quero;
    public $course;
    public $status;
    public $student;


    public function create(){
        //do what you need 
        return true;
    }
  
 
    // constructor with $db as database connection
    /* public function __construct($db){
        $this->conn = $db;
    }*/


    // constructor without database connection
    public function __construct(){
        //Do what you need
        $this->course = New Course();
    }
}
?>