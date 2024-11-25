<?php
require('helpers.php');
session_start();

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isset($_POST['book_id'])) {
            echo json_encode(['status' => 'error', 'message' => 'Book ID is missing.']);
            exit();
        }

        $region = trim($_POST['region']);
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $cin = trim($_POST['cin']);
        $street_address = trim($_POST['street_address']);
        $cc = trim($_POST['cc']);
        $city = trim($_POST['city']);
        $country = trim($_POST['country']);
        $zip = trim($_POST['zip']);
        $num = trim($_POST['num']);
        $book_id = trim($_POST['book_id']);

        if (
            empty($region) || empty($first_name) || empty($last_name) ||
            empty($cin) || empty($street_address) || empty($cc) ||
            empty($city) || empty($country) || empty($zip) || empty($num)
        ) {
            echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
            exit();
        }

        // Fetch the book details
        $stmt = $pdo->prepare("SELECT price, stock FROM books WHERE id = :id");
        $stmt->execute(['id' => $book_id]);
        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$book) {
            echo json_encode(['status' => 'error', 'message' => 'Book not found.']);
            exit();
        }

        // Check if the book is in stock
        if ($book['stock'] <= 0) {
            echo json_encode(['status' => 'error', 'message' => 'Book is no longer in stock.']);
            exit();
        }

        // Reduce the stock by 1
        $stmt = $pdo->prepare("UPDATE books SET stock = stock - 1 WHERE id = :id");
        $stmt->execute(['id' => $book_id]);

        $item_value = $book['price'];

        // Check if the user is logged in
        $username = $_SESSION['username'] ?? null;
        if (!$username) {
            echo json_encode(['status' => 'error', 'message' => 'User is not logged in.']);
            exit();
        }

        // Insert the sale record
        $stmt = $pdo->prepare("
            INSERT INTO sales (region, first_name, last_name, cin, street_address, cc, city, country, zip, num, username, item_value) 
            VALUES (:region, :first_name, :last_name, :cin, :street_address, :cc, :city, :country, :zip, :num, :username, :item_value)
        ");
        $stmt->execute([
            'region' => $region,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'cin' => $cin,
            'street_address' => $street_address,
            'cc' => $cc,
            'city' => $city,
            'country' => $country,
            'zip' => $zip,
            'num' => $num,
            'username' => $username,
            'item_value' => $item_value,
        ]);

        echo json_encode(['status' => 'success', 'message' => 'Bought successfully!']);
        exit();
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    exit();
}
