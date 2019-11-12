<?php
class annonce{
    

    public static function getNbAnnonces(){
        global $db;
        $req = $db->prepare('select count(*) from annonce;');
        $req->execute();
        echo $req;
        return $req;
    }
}

?>
