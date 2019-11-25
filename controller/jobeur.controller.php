
<?php
require ('model/utilisateur.php');    
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
        }

    }
    else{
        require('view/jobeur/listjobeur.view.php'); 
        }
        require('view/template/template.php');  
?>