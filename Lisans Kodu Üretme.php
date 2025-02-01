<?php
function generateLicenseKey($length = 20) {
    return strtoupper(bin2hex(random_bytes($length / 2)));
}

$pdo = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");

$license_key = generateLicenseKey();
$user_email = "test@example.com"; // Kullanıcının e-posta adresi

$stmt = $pdo->prepare("INSERT INTO licenses (license_key, user_email) VALUES (?, ?)");
$stmt->execute([$license_key, $user_email]);

echo "Lisans Kodu: " . $license_key;
?>
