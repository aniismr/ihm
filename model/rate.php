<?php
class rate{
    private $id_user;
    private $id_jobbeur;
    private $commentaire;
    private $num;
   
    public function __construct($id_user="",$id_jobbeur="",$commentaire="",$num=""){
        $this->id_user=$id_user;
        $this->id_jobbeur=$id_jobbeur;
       $this->commentaire=$commentaire;
       $this->num=$num;
       

    }    


     public static function getrate($id_jobbeur){
        global $db;
        $req = $db->prepare('select * from rate r inner join utilisateur u on r.id_user = u.id inner join utilisateur n on n.id = r.id_jobbeur where n.id=?' );
        $req->execute(array($id_jobbeur));

        return $req;
    }





   
}


?>
