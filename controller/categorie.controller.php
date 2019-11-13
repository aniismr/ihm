<?php
require ('model/categorie.php');
function listCategorie()
{
    $categories = categorie::getCategories();
    return $categories;

}

function nbCat(){

    $nbCategories=categorie::getNbCategories();
    return $nbCategories;
    
}

?>


