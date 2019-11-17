<?php
require('model/utilisateur.php');
if(isset($_SESSION['user'])){
    require('view/login/loggedIn.view.php');
    require('view/dashboard/dashboard.view.php');
    if(isset($_GET['action'])){
        $action=$_GET['action'];
        switch($action){
            case 'parametre':
                    $store=file_get_contents('store');
                    $user=unserialize($store);

                require('view/dashboard/parametre.view.php');
            break;
        }
    }
    require('view/template/template.php');  
}
else{
    header('location:index.php?controller=login&action=login'); 
}