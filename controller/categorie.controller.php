<?php
require ('../ihm/model/categorie.php');
function listCategorie()
{
	$nbCategories = categorie::getNbCategories();
    $categories = categorie::getCategories();
    require('view/home.view.php');

}

?>


