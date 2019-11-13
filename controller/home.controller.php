<?php

    require ('model/annonce.php');
    require ('model/categorie.php');
    require ('model/utilisateur.php');
    $categories=categorie::getCategories();
    $nbCategories=categorie::getNbCategories();
    $nbAnnonces=annonce::getNbAnnonces();
    $nbJobbeurs=utilisateur::getNbJobbeurs();
    if(isset($_SESSION["user"])){
        require('view/loggedIn.view.php');
    }
    else{
        require('view/loggedOut.view.php');
        require('view/popupLogIn.view.php');
    }
    require('view/home.view.php');
    require('view/template/template.php');  
 
    

?>