<?php

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=chanty;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
