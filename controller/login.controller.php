<?php
require ('model/utilisateur.php');
$action=$_GET['action'];
$user=$_POST['emailaddress'];
$pass=$_POST['password'];
if(isset($action)){
    switch($action){
        case "login":
            if(isset($user)&&isset($pass)){
                $tmp_user=new utilisateur($user,$pass);
                if($tmp_user->checkLogin()){
                    $_SESSION['user']=serialize($tmp_user);
                    file_put_contents('store', $_SESSION['user']);
            
                }
                
            }
            header("location:index.php");
        break;
        case "logout":
            unset($_SESSION['user']);
            header("location:index.php");
            
    }
}



