<?php
include_once 'model/connexion.php';
require('controller/home.controller.php');

$db= dbConnect();
if (isset($_GET['action']))       
switch ($_GET['action']){
    default:
showHome();    
}
else
showHome();    

?>