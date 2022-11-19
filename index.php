<?php

// define('APPROOT',dirname(dirname(__FILE__)));
define('URLROOT','http://localhost/');
define('IMAGE', 'http://localhost/public/img');
require './Core/Database.php';
require './Models/BaseModel.php';
require './Controllers/BaseController.php';
// ucfirts : Viet hoa chu dau trong productController
// strtolower viet thuong con lai
$controllerName = ucfirst((strtolower($_REQUEST['controller']) ?? 'product') . 'Controller');
$actionName = $_REQUEST['action'] ?? 'index';
$id = $_REQUEST['id'] ?? '';


// echo $controllerName;
// if(file_exists(URLROOT.'Controllers/'.$controllerName.'.php')){
    require "./Controllers/${controllerName}.php";
    $controllerObject = new $controllerName;
    $controllerObject->$actionName($id);
// }
// else {
//     print('Page not found');
//     echo URLROOT.'Controllers/'.$controllerName.'.php';
// }




// require './Controllers/CategoryController.php';
