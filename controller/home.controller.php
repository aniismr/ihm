<?php

    require ('model/annonce.php');
    require ('model/categorie.php');
    require ('model/utilisateur.php');
    require ('model/location.php');
    require ('model/skill.php');

    $categories=categorie::getCategories();
    $nbCategories=categorie::getNbCategories();
    $nbAnnonces=annonce::getNbAnnonces();
    $nbJobbeurs=utilisateur::getNbJobbeurs();
    $locations=location::getPhotoLocation();
        if(isset($_GET['action'])){
        $action=$_GET['action'];
        switch($action){

        }
    }
    if(isset($_SESSION["user"])){
        $store=$_SESSION['user'];
        $user=unserialize($store);
        require('view/login/loggedIn.view.php');
    }
    else{

        require('view/login/loggedOut.view.php');
        require('view/login/popupLogIn.view.php');
    }

    require('view/home.view.php');
    require('view/template/template.php');  
 
    

?>