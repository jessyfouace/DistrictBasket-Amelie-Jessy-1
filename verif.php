<?php 

try
{
	// On se connecte à la bdd
	$bdd = new PDO('mysql:host=mysql;dbname=district_basket;charset=utf8', 'root', 'mysecretpassword');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->query("SELECT * FROM admins");
$data = $req->fetchAll();

foreach ($data as $key => $value){
    if($_POST['name'] !== $value['user_name'] AND $_POST['password'] !== $value['password'])
        { 
            header('Refresh: 5; URL=index.php');
            echo("Accès refusé");
        }
        else
        {
            header('Refresh: 5; URL=admin.php');
            echo("acces autorisé");
        }
}
?>