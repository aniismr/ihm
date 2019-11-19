<?php
class annonce{
    

    public static function getNbAnnonces(){
        global $db;
        $req = $db->prepare('select count(*) as nb from annonce;');
        $req->execute();
        $res=$req->fetch();
        return $res['nb'];
    }

     public static function getAnnonces(){
        global $db;
        $req = $db->prepare('SELECT * FROM annonce;');
        $req->execute();
        return $req;
    }
     public static function getAnnoncedetail(){
        global $db;
        $req = $db->prepare('select * from annonce a inner join categorie c on a.id_categorie = c.id inner join utilisateur u on a.id_user = a.id where a.id=?' );
        $req->execute();
        return $req;
    }
}

?>
