<?php
include('categorie.controller.php');
include('annonce.controller.php');
function showHome(){
    
    $categories=listCategorie();
    $nbCategories=nbCat();
    $nbAnnonces=nbAnn();
    require('view/home.view.php');
}

?>