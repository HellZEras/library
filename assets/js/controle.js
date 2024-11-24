
function removeProduct(button) {
    const row = button.closest('.wishlist_item');

    if (row) {
        row.remove();
    }
}


