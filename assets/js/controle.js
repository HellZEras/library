
function removeProduct(button) {
    // Sélectionner la ligne parente (le `<tr>` du produit)
    const row = button.closest('.wishlist_item');

    // Supprimer la ligne du tableau
    if (row) {
        row.remove();
    }
}


