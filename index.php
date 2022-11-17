<?php

require './Core/Database.php';
require './Models/BaseModel.php';
require './Controllers/BaseController.php';
// ucfirts : Viet hoa chu dau trong productController
// strtolower viet thuong con lai
$controllerName = ucfirst((strtolower($_REQUEST['controller']) ?? 'Welcome') . 'Controller');
$actionName = $_REQUEST['action'] ?? 'index';

// echo $controllerName;
require "./Controllers/${controllerName}.php";
// require './Controllers/CategoryController.php';
$controllerObject = new $controllerName;
$controllerObject->$actionName();