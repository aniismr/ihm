<?php
require ('model/utilisateur.php');
require ('model/skill.php');
require ('model/categorie.php');
$action=$_GET['action'];
if(isset($action)){
    switch($action){
        case "login":
            $user=$_POST['emailaddress'];
            $pass=$_POST['password'];
            if(isset($user)&&isset($pass)){
                $tmp_user=new utilisateur($user,$pass);
                if($tmp_user->checkLogin()){
                    $_SESSION['user']=serialize($tmp_user);

            
                }
                
            }
            header("location:index.php");
        break;
        case "adduser":
            $tmp_user=new utilisateur($_POST['email'],$_POST['pass'],$_POST['account-type-radio'],$_POST['nom'],$_POST['prenom'])  ;
                $_SESSION['user']=serialize($tmp_user);
                    
                header('location:index.php?controller=dashboard&action=parametre');
                
        break;
        case 'confirmer':
    
            $store=unserialize($_SESSION['user']);
            $pass=$store->getPw();
            $user=new utilisateur($_POST['email'],$pass,$_POST['account-type-radio'],$_POST['nom'],$_POST['prenom'],$_POST['location'],$_POST['descr'],$_POST['salmin']);
            if (isset($_SESSION['conf'])){
            
            $user->updateUser($store->getId());
            }
            else{
            $user->adduser();
            $user->checkLogin();
            }
            if(isset($_POST['sk'])) {
            $skillslist=$_POST['sk'];
            foreach($skillslist as $value){
                $skilln=substr($value,strpos($value,':')+1);
                
                $skl=skill::getId($skilln);
            
            if (isset($_SESSION['conf'])){
                $skill=new skill($store->getId(),$skl);
                $skill->updateSkill();
                $skill->addSkillUser();
            }
            
            else{
            $skill=new skill($user->getId(),$skl);
            $skill->addSkillUser();
            }
            }
        }
            unset($_SESSION['user']);
            $_SESSION['user']=serialize($user);
            $_SESSION['conf']="oui";
            header('location:index.php');

        break;
        case "logout":
            session_destroy();
            header("location:index.php");
        break;
            
    }
}



