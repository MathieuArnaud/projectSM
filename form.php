<?php
require('index.php');
$_SESSION['message'] = '';
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




    <form class="form" action="index.php" method="post" enctype="multipart/form-data" autocomplete="off">
      
      <input type="text" placeholder="Prenom*" name="firstname" required />
      <input type="text" placeholder="Nom*" name="lastname" required />
      <input type="text"placeholder="N° Telephone" name="telephone" pattern="[0-9]{10}" required /> 
      <input type="email" placeholder="Email" name="email" required />
      <span id="condition">J'accepte les <a href="">conditions génerales d'utilisations</a><input type="checkbox" name="utilGV" required /></span>
      <div>
      <input type="submit" value="Réservez votre véhicule" name="register" class="btn btn-block btn-primary" />
      </div>
      
	  <div class="alert alert-error"><?php echo $_SESSION['message']?></div>
      
      
    </form>
  </div>
</div>
    
</body>
</html>