<?php
require ('model/categorie.php');
require ('model/skill.php');
if(isset($_POST['curcat'])){
    $curcat=$_POST['curcat'];
    $curcatid=categorie::getId($curcat);
    $skills=skill::getSkills($curcatid);

    while ($skill=$skills->fetch()){
        echo '<option class="bs-title-option" value="">Selectionner le skill</option>';
        echo '<option>'.$skill['nom'].'</option>';

    }
    
}
?>