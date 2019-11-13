<?php
require ('model/annonce.php');

function nbAnn(){
    $nbAnnonces=annonce::getNbAnnonces();
    return $nbAnnonces;
}
?>