/**
 * assets/js/modal.js
 * Petite modale de confirmation, en JS natif (aucun plugin).
 * Attend dans la page :
 *   - un overlay #deleteModal
 *   - des boutons [data-modal-trigger] avec data-id / data-name
 *   - des champs #deleteId / #deleteName à l'intérieur de la modale
 */
document.addEventListener('DOMContentLoaded', function () {
  const overlay = document.getElementById('deleteModal');
  if (!overlay) return;

  const idField   = document.getElementById('deleteId');
  const nameField = document.getElementById('deleteName');

  function openModal(id, name) {
    if (idField) idField.value = id;
    if (nameField) nameField.textContent = name;
    overlay.classList.add('is-open');
  }

  function closeModal() {
    overlay.classList.remove('is-open');
  }

  document.querySelectorAll('[data-modal-trigger]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      openModal(btn.getAttribute('data-id'), btn.getAttribute('data-name'));
    });
  });

  overlay.querySelectorAll('[data-modal-close]').forEach(function (btn) {
    btn.addEventListener('click', closeModal);
  });

  // Fermer en cliquant sur le fond
  overlay.addEventListener('click', function (e) {
    if (e.target === overlay) closeModal();
  });

  // Fermer avec Echap
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeModal();
  });
});
