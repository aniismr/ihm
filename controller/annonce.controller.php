<?php


    require ('model/annonce.php');
    require ('model/categorie.php');
    require ('model/utilisateur.php');
    require('model/location.php');
   
$locations=location::getlocations();
$categories=categorie::getCategories();


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
                $annonces=annonce::getAnnonces();
                 require('view/annonce.list.php'); 

            break;
            case'listecatloc':
            $categ="";
            $location="";
            if (isset($_POST['categorie']))
            $categ=categorie::getId($_POST['categorie']);
             if (isset($_POST['location']))
            $location=location::getId($_POST['location']);
           
            $annonces=annonce::getAnnoncecatloc($location,$categ);
            
            
                require('view/annonce.list.php'); 

            break;
            case 'details':
                $idann=$_GET['id'];
                echo "fff".$idann;
                $annoce=annonce::getAnnoncedetail($idann);
                require ('view/annonce/annonce.details.php');
                break;

            default:
            $annonces=annonce::getAnnonces();
            require('view/annonce.list.php'); 
            break;
        }

    }
    else{
        $annonces=annonce::getAnnonces();
             require('view/annonce.list.php');
        }
        require('view/template/template.php');  



?>

