<?php 

class categorie{
    public static function getCategories(){
        global $db;
        $req = $db->prepare('SELECT id,nom, description,photo FROM categorie;');
        $req->execute();
        return $req;
    }
    
    public static function getNbCategories(){
    	global $db;
		$req = $db->query("SELECT  COUNT(*) as NbCat FROM categorie;" );
		$donnees = $req->fetch();
		$req->closeCursor();
		return $donnees['NbCat'];
    }
}
