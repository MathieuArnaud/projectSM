<?php
require('index.php');

$message ='';
$messageWelcome ='<p id="messageWelcome">Vous allez bientot etre contacté par mail</p>';
$messageError ='<p id="messageError">Cet email est déjà dans le fichier</p>';
$welcome=false;




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">

    <title></title>
</head>
<body>


<div class="module">
    <h1>Je réserve mon véhicule</h1>





    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      
      <input type="text" placeholder="Prenom*" name="firstname" required />
      <input type="text" placeholder="Nom*" name="lastname" required />
      <input type="text"placeholder="N° Telephone" name="telephone" pattern="[0-9]{10}" required /> 
      <input id="email" type="email" placeholder="Email" name="EMAIL" required />
      <span id="condition">J'accepte les <a href="">conditions génerales d'utilisations</a><input type="checkbox" name="utilGV" required /></span>
      <div>
      <input id="submitForm" type="submit" value="Réservez votre véhicule" name="register" class="btn btn-block btn-primary" />
      </div>
      <?php
if(isset($_POST['firstname']) AND isset($_POST['EMAIL']) AND !empty($_POST['firstname']) AND !empty($_POST['EMAIL']))
  {
  
      $name = htmlspecialchars($_POST['firstname']);
      $email = $_POST['EMAIL'];
      echo '<p>bonjour : ' . $name . '</p>' . '<p id="messageStatut">' . $message . '</p>';
      
      // test if email doesnt exist
  
  $search = $email; // récupère l'email
  
  $lines = file('email.txt'); // 
  foreach($lines as $line){ // for line into file, search email
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
        $welcome =true;

  
      }
    
  } 
  
  
  }
  ?>


      
    </form>
    <?php 
    if($welcome==true){
      include('mailchimp.php');
    }
    ?>
  </div>
</div>
    
</body>
</html>