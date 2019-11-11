<?php
require ('model/categorie.php');
function listCategorie()
{
    $categories = categorie::getCategories();
    require('view/home.view.php');

}