<?php
require ('model/utilisateur.php');

function nbJobbeurs(){
    $nbJobbeurs=utilisateur::getNbJobbeurs();
    return $nbJobbeurs;
}
?>