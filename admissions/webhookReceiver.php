<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


// access the headers of the request
$headers = getallheaders();
$header_auth = $headers['Authorization'];

// authentication of the request - Basic Auth
$auth_token = 'Basic 123';

if ($header_auth != $auth_token){
    http_response_code(401);
    echo json_encode(array("message" => "Invalid token."));
    exit;
}

 
// get database connection
// include_once '../config/database.php';
 
// instantiate admission object
include_once '../objects/admission.php';
 
// $database = new Database();
// $db = $database->getConnection();
 
// $admission = new Admission($db);
$admission = new Admission();
 
// get posted data (body)
$data = json_decode(file_get_contents("php://input"));
 
// make sure data is not empty
if(
    !empty($data) 
){ 
    // set admission property values
    $admission->id_quero = $data->data->admission->id;

    $admission->course->id_institution_system = $data->data->admission->course->id;
    $admission->course->offer->discount = $data->data->admission->course->offer->discount;

    $admission->status = $data->data->admission->status;

    $admission->student->id_quero = $data->data->admission->student->id;
    $admission->student->name = $data->data->admission->student->name;
    $admission->student->cpf = $data->data->admission->student->cpf;
    $admission->student->birth_date = $data->data->admission->student->birth_date;
    $admission->student->emails = $data->data->admission->student->emails;
    $admission->student->phones = $data->data->admission->student->phones;

    $admission->student->enem->year = $data->data->admission->student->enem->year;
    $admission->student->enem->scores->essay = $data->data->admission->student->enem->scores->essay;
    $admission->student->enem->scores->math = $data->data->admission->student->enem->scores->math;
    $admission->student->enem->scores->language = $data->data->admission->student->enem->scores->language;
    $admission->student->enem->scores->nature = $data->data->admission->student->enem->scores->nature;
    $admission->student->enem->scores->social = $data->data->admission->student->enem->scores->social;
    
    $admission->student->address_information->address = $data->data->admission->student->address_information->address;
    $admission->student->address_information->number = $data->data->admission->student->address_information->number;  
    $admission->student->address_information->neighborhood = $data->data->admission->student->address_information->neighborhood;
    $admission->student->address_information->city = $data->data->admission->student->address_information->city;
    $admission->student->address_information->state = $data->data->admission->student->address_information->state;
    $admission->student->address_information->postal_code = $data->data->admission->student->address_information->postal_code;
 
    // create the admission
    if($admission->create()){
 
        // set response code - 201 created
        http_response_code(201);
 
        // tell the user
        echo json_encode(array("message" => "Admission was created.","data" => $admission,"teste1"=>$headers,"teste2"=>$header_auth));
    }
 
    // if unable to create the product, tell the user
    else{
 
        // set response code - 503 service unavailable
        http_response_code(503);
 
        // tell the user
        echo json_encode(array("message" => "Unable to create admission."));
    }
}
 
// tell the user data is incomplete
else{
 
    // set response code - 400 bad request
    http_response_code(400);
 
    // tell the user
    echo json_encode(array("message" => "Unable to create admission. Data is incomplete."));
}
?>