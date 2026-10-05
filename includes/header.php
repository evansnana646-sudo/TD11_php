<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>GesCo</title>

  <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>


<div class="app-shell">
  <aside class="sidebar">
    <div class="brand">
      <span class="brand-mark">
        <i class="fa-solid fa-address-card"></i>
      </span>
      Gesco
    </div>

    <nav class="sidebar-nav">
      <a href="../contact/index.php">
        <i class="fa-solid fa-users"></i>
        <span>Contacts</span>
      </a>

      <a href="../user/index.php">
        <i class="fa-solid fa-id-badge"></i>
        <span>Utilisateurs</span>
      </a>
    </nav>

    <div class="sidebar-user">
      <div class="who">
        Connecté en tant que
        <strong>TOTO</strong>
      </div>

      <a href="../../controller/deconnexionController.php" class="btn btn-outline btn-sm btn-block">
        <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
      </a>
    </div>
  </aside>

  <main class="main-content">
