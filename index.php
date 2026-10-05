<?php
 session_start();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Connexion — Gesco</title>

  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="login-shell">
  <div class="login-card">
    <div class="brand-mark">
      <i class="fa-solid fa-address-card"></i>
    </div>
    <h1>Gesco</h1>
    <p class="subtitle">
      Connectez-vous pour gérer vos contacts
    </p>

    <form method="POST" action="controller/connexionController.php">
      <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" required autofocus placeholder="vous@exemple.fr">
      </div>

      <div class="form-group">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" id="password" name="password" required placeholder="••••••••">
      </div>

      <button type="submit" class="btn btn-brand btn-block">
        <i class="fa-solid fa-right-to-bracket"></i> 
        Se connecter
      </button>
    </form>

  </div>
</div>




<script src="js/script.js"></script>


 <?php include("includes/erreur.php"); ?>

</body>
</html>
