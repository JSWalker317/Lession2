<?php

// define('APPROOT',dirname(dirname(__FILE__)));
define('URLROOT','http://localhost/');
define('IMAGE', 'http://localhost/public/img');
require './Core/Database.php';
require './Models/BaseModel.php';
require './Controllers/BaseController.php';
// ucfirts : Viet hoa chu dau trong productController
// strtolower viet thuong con lai
$controllerName = ucfirst((strtolower($_REQUEST['controller']) ?? 'Welcome') . 'Controller');
$actionName = $_REQUEST['action'] ?? 'index';
$id = $_REQUEST['id'] ?? '';


// echo $controllerName;
require "./Controllers/${controllerName}.php";
// require './Controllers/CategoryController.php';
$controllerObject = new $controllerName;
$controllerObject->$actionName($id);