<?php
class utilisateur{
    private $id;
    private $nom;
    private $pw;
    private $email;
    private $prenom;
    private $etat;
    private $photo;
    public function __construct($email="",$pw=""){
        $this->pw=$pw;
        $this->email=$email;
    }
    public static function getNbJobbeurs(){
        global $db;
        $req = $db->prepare('select count(*) as nb from utilisateur where type="jobbeur";');
        $req->execute();
        $res=$req->fetch();
        return $res['nb'];
    }
    public function getName(){
        return $this->nom;
    }
    public function getPhoto(){
        return $this->photo;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getEtat(){
        return $this->etat;
    }
    public function getId(){
        return $this->id;   
    }
    public function checkLogin(){
        global $db;
        $req=$db->prepare("select id,photo,nom, prenom,etat  from utilisateur where email=? and mdp=?;");
        $req->execute(array($this->email,$this->pw));
        $res=$req->fetch();
        if (isset($res['nom'])){
            $this->id=$res['id'];
            $this->photo=$res['photo'];
            $this->etat=$res['etat'];
            $this->nom=$res['nom'];
            $this->prenom=$res['prenom'];
            return true ;
    }
        else
            return false;
    }
    
}


