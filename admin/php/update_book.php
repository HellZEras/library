<?php
require("../php/data_loaders.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $response = [];
    if (updateBook($id, $name, $image, $price, $stock)) {
        ob_start();
        renderBooksTable();
        $response['table'] = ob_get_clean();
        $response['success'] = true;
        $response['message'] = "Book with ID $id updated successfully.";
    } else {
        $response['success'] = false;
        $response['message'] = "Error updating book with ID $id.";
    }

    echo json_encode($response);
    exit();
}
?>
