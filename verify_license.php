<?php
$pdo = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");

$license_key = $_GET['license_key'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM licenses WHERE license_key = ? AND status = 'active'");
$stmt->execute([$license_key]);
$license = $stmt->fetch();

if ($license) {
    echo json_encode(["status" => "valid"]);
} else {
    echo json_encode(["status" => "invalid"]);
}
?>
