<?php

    require('model/skill.php');
    require ('model/categorie.php');
    require ('model/utilisateur.php');
    require('model/location.php');
   
$locations=location::getlocations();
$categories=categorie::getCategories();
$skills=skill::getAllSkills();

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
                 require('view/jobeur/listjobeur.view.php'); 

            break;
            case 'detail':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $jobeurs=utilisateur::getJobS($id);
                    $jobeur=utilisateur::getUser($id);
                    require('view/jobeur/detailjobeur.view.php');
                    require('view/template/template.php');
                }
                break;

            default:
            break;
        }

    }
    else{
        if (isset($_POST['categorie']) && isset($_POST['skill']))
        $jobeurs=utilisateur::getJobeurs($_POST['categorie'],$_POST['skill']);
        else if (isset($_POST['categorie']))
        $jobeurs=utilisateur::getJobeurs($_POST['categorie'],"");
        else{
        $jobeurs=utilisateur::getJobeurs();
        }
    
        require('view/jobeur/listjobeur.view.php');
        require('view/template/template.php'); 
        }



?>

