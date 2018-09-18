<?php
 try
 {
 	$bdd = new PDO('mysql:host=mysql;dbname=distric_basket;charset=utf8', 'root', 'mysecretpassword');
 }
 catch(Exception $e)
 {
         die('Erreur : '.$e->getMessage());
 }
?>
