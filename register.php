<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital@1&family=Roboto:ital,wght@0,300;0,500;1,400&family=VT323&display=swap" rel="stylesheet">
</head>

<body class="flex items-center font-[VT323] bg-[url('../images/gray.jpg')] bg-no-repeat bg-cover select-none">
    <section class="w-full h-screen flex justify-center">
        <div class="flex flex-col-reverse md:flex-row items-center justify-center md:w-[80%] xl:w-[60%]">
            <div class="md:w-[50%] flex justify-center">
                <img src="image/loginreg.png" class="w-full" alt="Phone image" />
            </div>
            <div class="md:w-[50%] px-[4rem] py-[3rem] bg-transparent backdrop-blur-lg rounded-lg flex flex-col items-center justify-center space-y-4">
                <form action="" method="post" class="flex flex-col items-center justify-center space-y-4">

                    <div class="flex flex-col space-y-2 w-full items-center pt-4">
                        <p class="text-lg text-gray-700">or register with</p>

                        <a href="email.html" class="flex items-center justify-center space-x-2 w-[14rem] py-2 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 transition-all duration-200 bg-white">
                            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5">
                            <span>Register with Google</span>
                        </a>

                        <a href="facebook.php" class="flex items-center justify-center space-x-2 w-[14rem] py-2 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 transition-all duration-200 bg-white">
                            <img src="https://www.svgrepo.com/show/475646/facebook-color.svg" alt="Facebook" class="w-5 h-5">
                            <span>Register with Facebook</span>
                        </a>
                    </div>

                    <p>Already have an account? <a href="login.php" class="text-blue-400">Login here</a>!</p>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
