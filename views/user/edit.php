<?php include("../../includes/functions.php"); ?>
<?php include("../../includes/header.php"); ?>

<?php
  $user = null;
  $action="../../controller/userController.php?action=create";
if(isset($_GET['iduser']) == true) {
  $iduser= intval($_GET['iduser']);
  $user= $userdb->read($iduser);
  $action="../../controller/userController.php?action=update";
}

?>






<div class="page-header">
  <div>
    <h1>
     <?php 
      echo ($user == null) ? "Nouvel utilisateur " : "Modifier un utilisateur";
     ?>
     
    </h1>
    <p>
      <?php 
      echo ($user == null) ? "Créez un nouveau compte utilisateur. " : "Modifier le compte d'un utilisateur";
      ?>
    </p>
  </div>
  <a href="index.php" class="btn btn-outline">
    <i class="fa-solid fa-arrow-left"></i> Retour
  </a>
</div>



<div class="card-panel" style="max-width: 560px;">
  <!-- il n'est pas bien ne mettre les liens en claire il faut utiliser les chemins fictifs en utilisant les "root" -->
  <form method="POST" action=<?= $action ?>>
    <input type="hidden" name="iduser" value="<?= $user->iduser ?? '' ?>" />

    <div class="form-group">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" id="nom" name="nom" required placeholder="Ex : TEJIOGNI Marc" value="<?= $user->nom ?? '' ?>">
    </div>


    <div class="form-group">
      <label for="email" class="form-label">Email</label>
      <input type="email" id="email" name="email" required placeholder="mtejiogni@yahoo.fr" value="<?= $user->email ?? '' ?>">
    </div>

    <hr>

    <div class="form-grid">
      <div class="form-group">
        <label for="password" class="form-label">
          Mot de passe
          <span class="form-hint">
            <?php  if($user != null) : ?>
            (laisser vide pour ne pas changer)
            <?php endif; ?>
          </span>
        </label>
        <input type="password" id="password" name="password"
               placeholder=".........."> 
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
