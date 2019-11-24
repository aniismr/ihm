<?php 

class location{

    public static function getId($nom){
        global $db;
        $req=$db->prepare('select id from location where nom=? ;');
        $req->execute(array($nom));
        $res=$req->fetch();
        return $res['id'];
    }
    public static function getlocations(){
        global $db;
        $req = $db->prepare('SELECT id,nom FROM location;');
        $req->execute();
        return $req;
    }
    
    public static function getNblocations(){
    	global $db;
		$req = $db->query("SELECT  COUNT(*) as Nbloc FROM location;" );
		$donnees = $req->fetch();
		$req->closeCursor();
		return $donnees['Nbloc'];
    }
    
    public static function getPhotoLocation(){
        global $db;
        $req= $db->query("select photo,nom from location;");
        $req->execute();
        return $req;
    }
    
    public static function getNbJobsByLocation(){
        global $db;
        
        
    }
}
