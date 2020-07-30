<?php
require('index.php');
$message ='';
$messageWelcome ='Vous allez bientot etre contacté par mail';
$messageError ='cet email est déjà dans le fichier';





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
</head>
<body>
<div class="module">
    <h1>Je réserve mon véhicule</h1>





    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      
      <input type="text" placeholder="Prenom*" name="firstname" required />
      <input type="text" placeholder="Nom*" name="lastname" required />
      <input type="text"placeholder="N° Telephone" name="telephone" pattern="[0-9]{10}" required /> 
      <input type="email" placeholder="Email" name="email" required />
      <span id="condition">J'accepte les <a href="">conditions génerales d'utilisations</a><input type="checkbox" name="utilGV" required /></span>
      <div>
      <input type="submit" value="Réservez votre véhicule" name="register" class="btn btn-block btn-primary" />
      </div>
      
    <div class="emailValid">
    

        </div>
    


    <?php

if(isset($_POST['firstname']) AND isset($_POST['email']) AND !empty($_POST['firstname']) AND !empty($_POST['email']))
{

    $name = htmlspecialchars($_POST['firstname']);
    $email = $_POST['email'];
    echo '<p>bonjour : ' . $name . '</p>' . '<p id="messageStatut">' . $message . '</p>';
    
    // test if email doesnt exist

$search = $email; // récupère l'email

$lines = file('email.txt'); // function file() better than fopen()
foreach($lines as $line){
    if(strpos($line, $search) !==false){
      printf($messageError);

    } 
    else{
      // open file
      $fileToOpen = fopen('email.txt', 'a+');
      //operation(write email if email doesnt exist)
      fputs($fileToOpen, ($email));
      // close file
      fclose($fileToOpen);
      printf($messageWelcome);

    }
  
} 


}



    ?>
      
    </form>
  </div>
</div>
    
</body>
</html>