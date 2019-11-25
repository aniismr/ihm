<?php


    require ('model/annonce.php');
    require ('model/categorie.php');
    require ('model/utilisateur.php');
   $annonces=annonce::getAnnonces();
    
    if(isset($_SESSION["user"])){
        $store=$_SESSION['user'];
                $user=unserialize($store);

        require('view/login/loggedIn.view.php');
    }
    else{
        require('view/login/loggedOut.view.php');
        require('view/login/popupLogIn.view.php');
    }
    
   
 
    
    
    if(isset($_GET['action'])){
        $action=$_GET['action'];
        switch($action){
            case 'liste':
                
                 require('view/annonce.list.php'); 

            break;
        }

    }
    else{
             require('view/annonce.list.php');
        }
        require('view/template/template.php');  



?>

