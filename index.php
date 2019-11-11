<?php
include_once 'model/connexion.php';
require('controller/categorie.controller.php');

$db= dbConnect();
if (isset($_GET['action']))       
switch ($_GET['action']){
    default:
    listCategorie();
}
else
listCategorie();