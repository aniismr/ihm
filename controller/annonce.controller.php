<?php
<<<<<<< Updated upstream

    require ('model/annonce.php');
    require ('model/categorie.php');
    require ('model/utilisateur.php');
    $annonces=annonce::getAnnonces();
    
    if(isset($_SESSION["user"])){
        require('view/login/loggedIn.view.php');
    }
    else{
        require('view/login/loggedOut.view.php');
        require('view/login/popupLogIn.view.php');
    }
    
    require('view/annonce.list.php');
    require('view/template/template.php');  
 
    

?>
=======
    require('model/annonce.php');
    $action=$_GET['action'];
    if(isset($action)){
        switch($action){
            case 'list':
                $annonces=annonce::getAnnonces();
                require('view/annonce/listAnnonce.view.php');
            break;
        }
    }
>>>>>>> Stashed changes
