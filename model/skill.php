<?php
class skill{
    public static function getSkills($id){
        global $db;
        $req = $db->prepare('SELECT nom FROM skill where id_cat=?;');
        $req->execute(array($id));
        return $req; 
    }

}