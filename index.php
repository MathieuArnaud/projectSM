<?php 
session_start();
/* Connect to MySQL with PDO */
$dsn = 'mysql:dbname=client;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password); // use bdh for all SQL query
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">

    <title>TITRE à changer</title>

</head>
<body>

<?php

include('carousel.php');

?>

<div id="div">
<p>Hello ! You need car for tomorrow, the week end or maybe a whole week </p>
    <a class="to-set-form" href="form.php">
    <svg xmlns="http://www.w3.org/2000/svg" id="svgHighlight" version="1.1" width="32" height="32" viewBox="0 0 32 32">
    <title>mail</title>
    <path d="M26.666 0h-21.332c-2.934 0-5.334 2.4-5.334 5.333v21.333c0 2.934 2.4 5.334 5.334 5.334h21.332c2.936 0 5.334-2.4 5.334-5.334v-21.333c0-2.934-2.398-5.333-5.334-5.333zM8 8h16c0.286 0 0.563 0.061 0.817 0.177l-8.817 10.286-8.817-10.287c0.254-0.116 0.531-0.177 0.817-0.177zM6 22v-12c0-0.042 0.002-0.084 0.004-0.125l5.864 6.842-5.8 5.8c-0.045-0.167-0.069-0.34-0.069-0.517zM24 24h-16c-0.177 0-0.35-0.024-0.517-0.069l5.691-5.691 2.826 3.297 2.826-3.297 5.691 5.691c-0.167 0.045-0.34 0.069-0.517 0.069zM26 22c0 0.177-0.024 0.35-0.069 0.517l-5.8-5.8 5.864-6.842c0.003 0.041 0.004 0.083 0.004 0.125v12z"/>
  </svg></a> 
  </div>

</body>
<script src="index.js"></script>
</html>