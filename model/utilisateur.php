<?php
class utilisateur{
    
    private $username;
    private $pw;
    public function __construct($username,$pw){
        $this->username=$username;
        $this->pw=$pw;
    }
    public static function getNbJobbeurs(){
        global $db;
        $req = $db->prepare('select count(*) as nb from utilisateur where type="jobbeur";');
        $req->execute();
        $res=$req->fetch();
        return $res['nb'];
    }
    public function getName(){
        return $this->username;
    }
    public function checkLogin(){
        global $db;
        $req=$db->prepare("select nom from utilisateur where nom=? and mdp=?;");
        $req->execute(array($this->username,$this->pw));
        $res=$req->fetch();
        if (isset($res['nom']))
            return true ;
        else
            return false;
    }
    
}


