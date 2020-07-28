<?php 
session_start();

/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=client;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// Récupération de l'email
$reponse = $dbh->query('SELECT * FROM tableClient ORDER BY ID DESC ');


while ($donnees = $reponse->fetch())
{
    echo '<div id="wrapper"><p id="msg">' . htmlspecialchars($donnees['name']) .' : ' . '<p id="mail">'. htmlspecialchars($donnees['email']). '<p id="date">'.$donnees['date'] .'</p></p></p></div>';
}

$reponse->closeCursor(); // fin de la reponse





echo '<div id="div">Hello !</div>'
?>

<?= '<div id="div">Hello2 !</div>'
?>

</body>

</html>