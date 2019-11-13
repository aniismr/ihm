<?php
class annonce{
    

    public static function getNbAnnonces(){
        global $db;
        $req = $db->prepare('select count(*) as nb from annonce;');
        $req->execute();
        $res=$req->fetch();
        return $res['nb'];
    }
}

?>
