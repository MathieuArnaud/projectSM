
    <link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
<div class="module">
    <form class="form" action="index.php" method="post" enctype="multipart/form-data" autocomplete="off">
      
      <input type="text" placeholder="Prenom*" name="firstname" required />
      <input type="text" placeholder="Nom*" name="lastname" required />
      <input type="text"placeholder="N° Telephone" name="telephone" pattern="[0-9]{10}" required /> 
      <input id="email" type="email" placeholder="Email" name="EMAIL" required />
      <span id="condition">J'accepte les <a href=""><p>conditions génerales d'utilisations</p></a><input type="checkbox" name="utilGV" required /></span>
      <div>
      <input id="submitForm" type="submit" value="Réservez votre véhicule" name="register" class="btn btn-block btn-primary" />
      </div>
    </form>