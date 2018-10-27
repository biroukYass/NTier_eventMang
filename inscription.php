<?php

if(!empty($_POST['user_nom']))
{


$pdo = new PDO('mysql:host=localhost;dbname=adv_db', 'root', '');
if (!$pdo) {
   die('Impossible de se connecter : ' . mysql_error());
}
//$row = $statement->fetch(PDO::FETCH_ASSOC);
//echo htmlentities($row['_message']);

else{

$user_nom = htmlspecialchars($_POST['user_nom']);
$user_prenom = htmlspecialchars($_POST['user_prenom']);


$query = "INSERT INTO client(nom , prenom) VALUES('$user_nom', '$user_prenom')";
$statement = $pdo->query($query);

echo "votre inscription est bien faite";
echo "<br>" . $user_nom;

}
}
else
{
echo 'user nom n est  pas  saisie …';
}

?>
