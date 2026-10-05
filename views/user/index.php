<?php include("../../includes/functions.php"); ?>
<?php include("../../includes/header.php"); ?>


<?php 
$users = $userdb->readall();

// $delete_users=$userdb->delete();
?>




<div class="page-header">
  <div>
    <h1>Utilisateurs</h1>
    <p>Les comptes qui peuvent se connecter à Gesco et gérer des contacts.</p>
  </div>
  <a href="edit.php" class="btn btn-brand">
    <i class="fa-solid fa-plus"></i> Nouvel utilisateur
  </a>
</div>

<div class="card-panel">

  <form method="get" action="index.php" class="search-box" style="margin-bottom: 1.25rem;">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input type="search" name="q" placeholder="Rechercher un utilisateur…">
  </form>

  <table class="table-gesco">
    <thead>
      <tr>
        <th>Utilisateur</th>
        <th>Email</th>
        <th>Contacts</th>
        <th class="text-end">Actions</th>
      </tr>
    </thead>

    <tbody>
      <?php 
    if($users !=null && sizeof($users) > 0 ) :
      foreach($users as $u) :

    ?>
      <tr>
        <td data-label="Utilisateur" class="name-cell-wrap">
          <div class="name-cell">
            <div>
              <div class="fullname"><?=  $u->nom ?></div>
              <div class="sub"><?=  $u->iduser ?></div>
            </div>
          </div>
        </td>
        <td data-label="Email">
          <?= $u-> email ?>
        
        <td data-label="Contacts">
          <span class="badge"><?= sizeof($contactdb->readIduser($u->iduser)) ?></span>
        </td>
        <td data-label="Actions" class="text-end">
          <a href="edit.php?iduser=<?= $u->iduser ?>" class="btn btn-outline btn-sm btn-icon" title="Modifier">
            <i class="fa-solid fa-pen"></i>
          </a>

          <button type="button" class="btn btn-outline-danger btn-sm btn-icon" title="Supprimer" data-modal-trigger data-id="<?= $u->iduser ?>" data-name="<?= $u->nom ?>">
            <i class="fa-solid fa-trash"></i>
          </button>
        </td>
      </tr>
      <?php   
       endforeach;
      endif;
      ?>
    </tbody>
  </table>
</div>



<!-- Modale de confirmation de suppression -->
<div class="modal-overlay" id="deleteModal">
  <div class="modal-box">
    <h3><i class="fa-solid fa-triangle-exclamation" style="color: var(--danger);"></i> Supprimer cet utilisateur ?</h3>
    <p>
      Voulez-vous vraiment supprimer <strong id="deleteName"></strong> ?
      Cette action est irréversible et supprimera aussi ses contacts.
    </p>
    <div class="modal-actions">
      <button type="button" class="btn btn-outline" data-modal-close>Annuler</button>
      <form method="post" action="../../controller/userController.php?action=delete">
        <input type="hidden" name="iduser" id="deleteId" >
        <button type="submit" class="btn btn-danger" >
          <i class="fa-solid fa-trash"></i> Supprimer
        </button>
      </form>
    </div>
  </div>
</div>







<?php include("../../includes/footer.php"); ?>
