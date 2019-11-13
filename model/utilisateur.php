<?php
class utilisateur{
    

    public static function getNbJobbeurs(){
        global $db;
        $req = $db->prepare('select count(*) as nb from utilisateur where type="jobbeur";');
        $req->execute();
        $res=$req->fetch();
        return $res['nb'];
    }
}

?>
