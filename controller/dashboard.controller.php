<?php
require('model/utilisateur.php');
require('model/location.php');
require('model/categorie.php');
require('model/annonce.php');

$locations=location::getlocations();
$categories=categorie::getCategories();
if(isset($_SESSION['user'])){
    $store=$_SESSION['user'];
    $user=unserialize($store);
    require('view/login/loggedIn.view.php');
    require('view/dashboard/dashboard.view.php');
    if(isset($_GET['action'])){
        $action=$_GET['action'];
        switch($action){
            case 'parametre':
                require('view/dashboard/parametre.view.php');
            break;
            case 'postTask':
                require('view/dashboard/postTask.view.php');
            break;
            case 'addannoce':
                
                $categ=categorie::getId($_POST['categorie']);
                $location=location::getId($_POST['location']);
                $tmp_ann=new annonce($_POST['libelle'],$_POST['description'],$location,$_POST['adresse'],$_POST['prix'],$_POST['delais'],$categ,$user->getId());
                $tmp_ann->addAnnonce();
                break;
           




        }
    }
    require('view/template/template.php');  
}
else{
    header('location:index.php?controller=login&action=login'); 
}