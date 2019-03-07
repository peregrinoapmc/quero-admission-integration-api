<?php

class AddressInformation{

 
     // database connection and table name
    /* private $conn;
     private $table_name = "address_informations"; */
 
    // object properties
    public $address;
    public $number;
    public $neighborhood;
    public $city;
    public $state;
    public $postal_code;
 
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