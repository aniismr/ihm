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
    private $photo1;
    private $photo2;
    private $photo3;
    public function __construct($lib="",$desc="",$loc="",$adr="",$prix="",$del="",$cat="",$user="",$photo1="",$photo2="",$photo3=""){
        $this->libel=$lib;
        $this->desc=$desc;
       $this->loc=$loc;
       $this->adr=$adr;
       $this->prix=$prix;
       $this->del=$del;
       $this->cat=$cat; 
        $this->user=$user;
        $this->photo1=$photo1;
         $this->photo2=$photo2;
          $this->photo3=$photo3;

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
        echo "eee".$this->photo2;
        $req=$db->prepare('insert into annonce(libelle,description,delais,etat,prix,adresse,date,note,id_location,id_categorie,id_user,photo,photo2,photo3)values(?,?,?,?,?,?,SYSDATE(),?,?,?,?,?,?,?);');
        $req->execute(array($this->libel,$this->desc,$this->del,0,$this->prix,$this->adr,0,$this->loc,$this->cat,$this->user,$this->photo1,$this->photo2,$this->photo3));

        return $req;
    }

     public static function getAnnonces(){
        global $db;
        $req = $db->prepare('SELECT * FROM annonce;');
        $req->execute();
        return $req;
    }
     public static function getAnnoncedetail($id){
        global $db;
        $req = $db->prepare('select * from annonce a inner join categorie c on a.id_categorie = c.id inner join utilisateur u on a.id_user = u.id inner join location l on a.id_location = l.id where a.id=?' );
        $req->execute(array($id));

        return $req;
    }

      public static function getAnnoncecatloc($loc="",$cat=""){
      	global $db;
      	if (isset($loc) && isset($cat)){
      		 $req = $db->prepare("select * from annonce where id_location=? and id_categorie=?" );
      		 $req->execute(array($loc,$cat));
      	}
      	else if (isset($loc)){
      		$req = $db->prepare("select * from annonce where id_location=? " );
      		$req->execute(array($loc));
      	}
      	else if (isset($cat))
      	{
      		$req = $db->prepare("select * from annonce where id_categorie=? " );
      		$req->execute(array($cat));
      	}
      	else
      	{

        	$req = $db->prepare("select * from annonce  " );
       		$req->execute();
        }
        return $req;
    }


   
}


?>
