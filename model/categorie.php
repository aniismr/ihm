<?php 
class categorie{
    public static function getCategories(){
        global $db;
        $req = $db->prepare('SELECT id,nom, description,photo FROM categorie;');
        $req->execute();
        return $req;
    }
}