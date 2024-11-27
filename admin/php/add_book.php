<?php
require("../php/data_loaders.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $response = [];

    $result = addBook($name, $image, $price, $stock);

    if ($result['success']) {
        ob_start();
        renderBooksTable();
        $response['table'] = ob_get_clean();
        $response['success'] = true;
        $response['message'] = $result['message'];
    } else {
        $response['success'] = false;
        $response['message'] = $result['message'];
    }

    echo json_encode($response);
    exit();
}
?>
