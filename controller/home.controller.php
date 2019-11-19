<?php

    require ('model/annonce.php');
    require ('model/categorie.php');
    require ('model/utilisateur.php');
    $categories=categorie::getCategories();
    $nbCategories=categorie::getNbCategories();
    $nbAnnonces=annonce::getNbAnnonces();
    $nbJobbeurs=utilisateur::getNbJobbeurs();
    
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