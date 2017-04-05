<!DOCTYPE html>
<html>
<head>
      <title> Gestion de stock</title>
	  <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
      <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['categorie']))
{
try
{
$bdd = new PDO('mysql:host=localhost;dbname=gestion_stock;charset=utf8', 'root', '',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

// Vérification des identifiants
$req = $bdd->prepare('SELECT id,login,categorie FROM user WHERE Login = :Login AND Pass = :Pass AND categorie = :categorie');
$req->execute(array(
    'Login' => $_POST['login'],
    'Pass'=> $_POST['password'],
	'categorie' => $_POST['categorie']));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
	include('index.php');
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['Login'] = $resultat['login'];
	$_SESSION['categorie'] = $resultat['categorie'];
    echo 'Vous êtes connecté !';
	include('acceuil.php');
}
}
?>
</body>
 </html>