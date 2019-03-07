<?php

include 'enem.php';
include 'address_information.php';

class Student{

     // database connection and table name
    /* private $conn;
     private $table_name = "students"; */
 
    // object properties
    public $id_quero;
    public $name;
    public $cpf;
    public $birth_date;
    public $emails;
    public $phones;
    public $enem;
    public $address_information;
 
    // constructor with $db as database connection
    /* public function __construct($db){
        $this->conn = $db;
    }*/


    // constructor without database connection
    public function __construct(){
        //do what you need
        $this->enem = new Enem();
        $this->address_information = new AddressInformation();
    }
}
?>