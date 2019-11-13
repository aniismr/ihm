<?php

    require ('model/annonce.php');
    require ('model/categorie.php');
    $categories=categorie::getCategories();
    $nbCategories=categorie::getNbCategories();
    $nbAnnonces=annonce::getNbAnnonces();
    require('view/home.view.php');

?>