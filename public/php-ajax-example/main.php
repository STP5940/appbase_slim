<?php

require_once 'crud.php';




if ( isset($_POST["id"]) && !empty($_POST["id"]) &&
isset($_POST["name"]) && !empty($_POST["name"]) &&
isset($_POST["lastname"]) && !empty($_POST["lastname"]) && isset($_POST["phone"]) && !empty($_POST["phone"]) )
{

$crud = new CRUD($db);

$con = new Contact();
$con->id = $_POST["id"];
$con->name = $_POST["name"];
$con->lastname = $_POST["lastname"];
$con->phone = $_POST["phone"];

$crud->create($con);

echo true;

}else echo false;





/*
*/







?>
