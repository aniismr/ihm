<?php
class annonce{
    private $libel;
    private $desc;
    private $loc;
    private $adr;
    private $prix;
    private $del;
    private $cat;
    private $user;
    public function __construct($lib,$desc,$loc,$adr,$prix,$del,$cat,$user){
        $this->libel=$lib;
        $this->desc=$desc;
       $this->loc=$loc;
       $this->adr=$adr;
       $this->prix=$prix;
       $this->del=$del;
       $this->cat=$cat; 
        $this->user=$user;

    }    

    public static function getNbAnnonces(){
        global $db;
        $req = $db->prepare('select count(*) as nb from annonce;');
        $req->execute();
        $res=$req->fetch();
        return $res['nb'];
    }
    public function addAnnonce(){
        global $db;
        $req=$db->prepare('insert into annonce(libelle,description,delais,etat,prix,adresse,date,note,id_location,id_categorie,id_user)values(?,?,?,?,?,?,SYSDATE(),?,?,?,?);');
        $req->execute(array($this->libel,$this->desc,$this->del,0,$this->prix,$this->adr,0,$this->loc,$this->cat,$this->user));
        return $req;
    }
}


?>
