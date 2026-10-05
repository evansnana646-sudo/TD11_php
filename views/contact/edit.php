<?php include("../../includes/functions.php"); ?>
<?php include("../../includes/header.php"); ?>





<div class="page-header">
  <div>
    <h1>Nouveau contact</h1>
    <p>Ajoutez une nouvelle personne à votre carnet.</p>
  </div>
  <a href="index.php" class="btn btn-outline">
    <i class="fa-solid fa-arrow-left"></i> Retour
  </a>
</div>



<div class="card-panel" style="max-width: 640px;">
  <form method="POST" action="">
    <input type="hidden" name="idcontact" value="" />

    <div class="form-grid">
      <div class="form-group">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" id="prenom" name="prenom" required placeholder="Ex : TOTO">
      </div>
      <div class="form-group">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" id="nom" name="nom" required placeholder="Ex : TATA">
      </div>
    </div>


    <div class="form-grid">
      <div class="form-group">
        <label for="telephone" class="form-label">Téléphone</label>
        <input type="tel" id="telephone" name="telephone" placeholder="693909121">
      </div>
      <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" placeholder="toto@exemple.fr">
      </div>
    </div>


    <div class="form-actions">
      <button type="submit" class="btn btn-brand">
        <i class="fa-solid fa-check"></i> Enregistrer
      </button>
      <a href="index.php" class="btn btn-outline">Annuler</a>
    </div>
  </form>

</div>







<?php include("../../includes/footer.php"); ?>
