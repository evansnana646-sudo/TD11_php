<?php include("../../includes/header.php"); ?>
<?php include("../../includes/functions.php"); ?>





<div class="page-header">
  <div>
    <h1>Contacts</h1>
    <p>00 Contacts enregistrés.</p>
  </div>
  <a href="edit.php" class="btn btn-brand">
    <i class="fa-solid fa-user-plus"></i> 
    Nouveau contact
  </a>
</div>

<div class="card-panel">

  <form method="get" action="index.php" class="search-box" style="margin-bottom: 1.25rem;">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input type="search" name="search" placeholder="Rechercher un contact…" />
  </form>

  <table class="table-gesco">
    <thead>
      <tr>
        <th>Contact</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Ajouté par</th>
        <th>Date</th>
        <th class="text-end">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-label="Contact" class="name-cell-wrap">
          <div class="name-cell">
            <div class="fullname">cdcdc </div>
          </div>
        </td>
        <td data-label="Téléphone">
          xsqdsd
        </td>
        <td data-label="Email">
          cdcd
        </td>
        <td data-label="Ajouté par">
          cdcdcds
        </td>
        <td data-label="Date">
          dcdscd
        </td>
        <td data-label="Actions" class="text-end">
          <a href="" class="btn btn-outline btn-sm btn-icon" title="Modifier">
            <i class="fa-solid fa-pen"></i>
          </a>
          <button type="button" class="btn btn-outline-danger btn-sm btn-icon" title="Supprimer" data-modal-trigger data-id="" data-name="">
            <i class="fa-solid fa-trash"></i>
          </button>
        </td>
      </tr>
    </tbody>
  </table>

</div>




<!-- Modale de confirmation de suppression -->
<div class="modal-overlay" id="deleteModal">
  <div class="modal-box">
    <h3><i class="fa-solid fa-triangle-exclamation" style="color: var(--danger);"></i> Supprimer ce contact ?</h3>
    <p>
      Voulez-vous vraiment supprimer <strong id="deleteName"></strong> ? Cette action est irréversible.
    </p>
    <div class="modal-actions">
      <button type="button" class="btn btn-outline" data-modal-close>Annuler</button>
      <form method="POST" action="../../contoller/userController.php?action=delete">
        <input type="hidden" name="iduser" id="deleteId">
        <button type="submit" class="btn btn-danger">
          <i class="fa-solid fa-trash"></i> Supprimer
        </button>
      </form>
    </div>
  </div>
</div>






<?php include("../../includes/footer.php"); ?>
