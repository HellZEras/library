<?php
require("../php/data_loaders.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $response = [];
    if (deleteBook($id)) {
        ob_start();
        renderBooksTable();
        $response['table'] = ob_get_clean();
        $response['success'] = true;
        $response['message'] = "Book with ID $id deleted successfully.";
    } else {
        $response['success'] = false;
        $response['message'] = "Error deleting book with ID $id.";
    }

    echo json_encode($response);
    exit();
}

?>