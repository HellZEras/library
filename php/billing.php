<?php
require('helpers.php');
session_start();

try {
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

        if (empty($region) || empty($first_name) || empty($last_name) || empty($cin) || empty($street_address) || empty($cc) || empty($city) || empty($country) || empty($zip) || empty($num)) {
            $error = "All fields are required.";
            echo json_encode(['status' => 'error', 'message' => $error]);
            exit();
        }

        $stmt = $pdo->prepare("INSERT INTO sales (region, first_name, last_name, cin, street_address, cc, city, country, zip, num) 
                                VALUES (:region, :first_name, :last_name, :cin, :street_address, :cc, :city, :country, :zip, :num)");
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
        ]);

        echo json_encode(['status' => 'success', 'message' => 'Billing details submitted successfully!']);
        exit();
    }
} catch (PDOException $e) {
    $error = "Database connection failed: " . $e->getMessage();
    echo json_encode(['status' => 'error', 'message' => $error]);
    exit();
}
?>
