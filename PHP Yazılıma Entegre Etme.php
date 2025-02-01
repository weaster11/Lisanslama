<?php
$license_key = "KULLANICININ_LİSANS_KODU";
$server_url = "https://yourdomain.com/verify_license.php?license_key=" . $license_key;

$response = file_get_contents($server_url);
$data = json_decode($response, true);

if ($data["status"] === "valid") {
    echo "Lisans geçerli, devam edebilirsiniz.";
} else {
    die("Geçersiz lisans! Lütfen doğru lisans anahtarını girin.");
}
?>
