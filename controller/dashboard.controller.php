<?php
require('model/utilisateur.php');
require('model/location.php');
require('model/categorie.php');
require('model/annonce.php');
include "model/fonction.class.php";
$tab_ext=array('jpg','png','gif');
$fn=new fonction();
$photo="";
$photo2="";
$photo3="";
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
            if(isset($_FILES['photo']))
{

$photo=$_FILES['photo'];
if(isset($photo)&& $photo['error']==0)
                 if($photo['size'] <= 1000000)
                    {
                            $infosfichier = pathinfo($photo['name']);
                            $extension_upload = $infosfichier['extension'];
                            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                            if (in_array($extension_upload, $extensions_autorisees))
                            {
                                    move_uploaded_file($photo['tmp_name'], 'public/images/' . basename($photo['name']));
                            }
                            
                             
                    }
                }
                            if(isset($_FILES['photo2']))
{

$photo2=$_FILES['photo2'];
if(isset($photo2)&& $photo2['error']==0)
                 if($photo2['size'] <= 1000000)
                    {
                            $infosfichier = pathinfo($photo2['name']);
                            $extension_upload = $infosfichier['extension'];
                            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                            if (in_array($extension_upload, $extensions_autorisees))
                            {
                                    move_uploaded_file($photo2['tmp_name'], 'public/images/' . basename($photo2['name']));
                            }
                            
                             
                    }
                }            if(isset($_FILES['photo3']))
{

$photo3=$_FILES['photo3'];
if(isset($photo3)&& $photo3['error']==0)
                 if($photo3['size'] <= 1000000)
                    {
                            $infosfichier = pathinfo($photo3['name']);
                            $extension_upload = $infosfichier['extension'];
                            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                            if (in_array($extension_upload, $extensions_autorisees))
                            {
                                    move_uploaded_file($photo3['tmp_name'], 'public/images/' . basename($photo3['name']));
                            }
                            
                             
                    }
                }

 
                $categ=categorie::getId($_POST['categorie']);
                $location=location::getId($_POST['location']);

                $tmp_ann=new annonce($_POST['libelle'],$_POST['description'],$location,$_POST['adresse'],$_POST['prix'],$_POST['delais'],$categ,$user->getId(),$photo['name'],$photo2['name'],$photo3['name']);
                echo"ee".$photo2['name'];
                $tmp_ann->addAnnonce();
                break;
           




        }
    }
    require('view/template/template.php');  
}
else{
    header('location:index.php?controller=login&action=login'); 
}