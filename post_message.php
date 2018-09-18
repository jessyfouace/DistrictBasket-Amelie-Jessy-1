<?php


// tentative de connexion a la BDD
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=mysql;dbname=district_basket;charset=utf8', 'root', 'mysecretpassword');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// On envoie notre message a la BDD
$req = $bdd->prepare('INSERT INTO message (user_email, user_message) VALUES(?,?)'); // ici on ne connait pas encore les valeurs, on met donc des "?"

// il faut le recupérer avec le post
$result = $req->execute(array(
    $_POST['useremail'],
    $_POST['usermessage'],
    ));

$id = $bdd->lastInsertId();
    
if($result){
    header('location: apercu_message.php?id='.$id);
}
else{
    header('location: erreurs_generiques.php');
}
?>