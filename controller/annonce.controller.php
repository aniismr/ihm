<?php
require ('model/annonce.php');

function nbAnn(){
    $nbAnnonces=annonce::getNbAnnonces();
    require('view/home.view.php');
}
?>