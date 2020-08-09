<?php

$message ='';
$messageWelcome ='<p id="messageWelcome">Vous allez bientot etre contacté par mail</p>';
$messageError ='<p id="messageError">Cet email est déjà dans le fichier</p>';


if(isset($_POST['firstname']) AND isset($_POST['EMAIL']) AND !empty($_POST['firstname']) AND !empty($_POST['EMAIL']))
  {
    if(filter_var($_POST['EMAIL'], FILTER_VALIDATE_EMAIL)){
      $name = htmlspecialchars($_POST['firstname']);
      $email = $_POST['EMAIL'];
      
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

			include('mailchimp.php');
		
      }
  } 
      echo '<p class="status">email valide</p>';
    } else{
      echo '<p class="status">email invalide</p>';
    }
  
 
}




?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../project/css/main.css">
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 

    <title>TITRE à changer</title>

</head>
<body>
<article>
		<div id="part1">
			<video autoplay="" muted="" loop="">
				<source src="imgProjectSM/video3.webm" type="video/webm">
			</video>
			<img id="logo" src="imgProjectSM/tesla2.png">
			<img id="cybertruck" src="imgProjectSM/cybertruck2.png">
			<p id="polyV">La polyvalence d'un pick-up et les performances d'une voiture de sport</p>

		</div>
	</article>
<?php

include('carousel.php');
include('form.php');

?>
<div class="btn"id="btn"><p>Réserver un essai</p></div>

</body>
<script src="../project/js/index.js"></script>
</html>