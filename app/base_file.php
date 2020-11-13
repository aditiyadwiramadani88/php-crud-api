<?php
use Request\Server;
 
header("Acess-Control-Allow-Methods: PUT");
header('Content-Type: application/json');
$Base_Dir = '../app';
spl_autoload_register(function ($class_name) {
    include  __DIR__ . "/$class_name.php";
   
});


require_once '../Db.php';
include 'route.php';

