<?php

include_once 'model/connexion.php';
session_start();

$controller='home';

if(isset($_REQUEST['controller'])){
    $controller=$_REQUEST['controller'];
    switch($controller){
        default:
        include('controller/'.$controller.'.controller.php');
    }
}
else{
    include('controller/'.$controller.'.controller.php');
}

?>