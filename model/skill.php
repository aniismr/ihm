<?php
class skill{
 
    private $user;
    private $skill;

    public function __construct($user,$skill){
        $this->skill=$skill;
        $this->user=$user;
    }
    public function addSkillUser(){
        global $db;

            $req=$db->prepare('insert into skilluser(id_user,id_skill) values(?,?)');
            $req->execute(array($this->user,$this->skill));
            
        }
    public function updateSkill(){
        global $db;
        $req=$db->prepare('delete from skilluser where id_user=?');
        $req->execute(array($this->user));
        
    }
    public static function getSkills($id){
        global $db;
        $req = $db->prepare('SELECT nom FROM skill where id_cat=?;');
        $req->execute(array($id));
        return $req; 
    }
    public static function getId($nom){
        global $db;
        $req=$db->prepare('select id from skill where nom=? ;');
        $req->execute(array($nom));
        $res=$req->fetch();
        return $res['id'];
    }

    public static function getAllSkills(){
        global $db;
        $req=$db->prepare('select * from skill;');
        $req->execute();
        return $req;
    }

}