<?php

include_once 'model/connexion.php';
require('controller/home.controller.php');

$controller='home.controller';
$db= dbConnect();

if(isset($_REQUEST['controller'])){
    $controller=$_REQUEST['controller'];
    switch($controller){
        default:
        include('controller/'.$controller.'.php');
    }
}
else{
    include('controller/'.$controller.'.php');
}
?>