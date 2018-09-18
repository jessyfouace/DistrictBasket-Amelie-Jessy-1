<?php
 try
 {
 	$bdd = new PDO('mysql:host=localhost;dbname=districbasket;charset=utf8', 'root', 'Dzier72bc92a');

 }
 catch(Exception $e)
 {
         die('Erreur : '.$e->getMessage());
 }
?>
