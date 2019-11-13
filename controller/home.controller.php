<?php

    require ('model/annonce.php');
    require ('model/categorie.php');
    require ('model/utilisateur.php');
    $categories=categorie::getCategories();
    $nbCategories=categorie::getNbCategories();
    $nbAnnonces=annonce::getNbAnnonces();
    $nbJobbeurs=utilisateur::getNbJobbeurs();
    require('view/home.view.php');

?>