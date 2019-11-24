<?php

    require ('model/annonce.php');
    require ('model/categorie.php');
    require ('model/utilisateur.php');
    require ('model/location.php');
    $categories=categorie::getCategories();
    $nbCategories=categorie::getNbCategories();
    $nbAnnonces=annonce::getNbAnnonces();
    $nbJobbeurs=utilisateur::getNbJobbeurs();
    $locations=location::getPhotoLocation();
        if(isset($_GET['action'])){
        $action=$_GET['action'];
        switch($action){
            case 'adduser':
            $tmp_user=new utilisateur($_POST['email'],$_POST['pass'],'jobbeur',$_POST['nom'],$_POST['prenom']);
            $tmp_user->adduser();
            header('location:index.php');
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