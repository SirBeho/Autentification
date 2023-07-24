<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="min-h-screen flex flex-wrap justify-center sm:content-center font-['Open_Sans']">
        <div class=" w-full sm:max-w-[430px] p-6 sm:p-12 sm:border border-[#BDBDBD] rounded-3xl  text-[#333]">

            <img class="ms-1" src="./svg/devchallenges.svg" alt="logo" >

            <div class="my-8">
                <h3 class="font-semibold text-lg leading-snug" > Login </h3>
            </div>

            <form action="./php/select.php" method="post" class="flex flex-col gap-4 text-gray-500">
                <div class="flex items-center gap-3 border border-[#BDBDBD] rounded-lg p-3 ps-4">
                    <div class="w-4" ><img  src="./svg/email.svg" alt="logo"></div>
                    <input class="outline-none w-full" type="email" name="email" autocomplete="off" placeholder="Email" required>
                </div>
                <div class="flex items-center gap-3 border border-[#BDBDBD] rounded-lg p-3 ps-4">
                    <div class="w-4"><img src="./svg/password.svg" alt="logo"></div>
                    <input class="outline-none w-full" type="password" name="password" autocomplete="off" placeholder="Password" required >
                </div>
                <?php
                    session_start();
                    if (isset($_SESSION['error_message'])) {
                        echo '<p class="text-red-500">' . $_SESSION['error_message'] . '</p>';
                        unset($_SESSION['error_message']);
                    }
                    ?>
                <button class="w-full p-1.5 mt-2 bg-blue-500 rounded-lg text-sm leading-normal font-semibold text-white" type="submit" > Login </button>
            </form>
            
            <div class="mt-8 flex flex-col gap-6 items-center text-sm text-gray-500" >
                <span class="w-fit" >or continue with these social profile</span>
                <div class="w-fit  flex gap-5" >
                    <button><img src="./svg/Google.svg" alt="logo" ></button>
                    <button><img src="./svg/Facebook.svg" alt="logo"></button>
                    <button><img src="./svg/Twitter.svg" alt="logo"></button>
                    <button><img src="./svg/Gihub.svg" alt="logo"></button>
                </div>
                <p class="w-fit text-[17px] text-[#333]" > Don't have an account yet? <a href="register.php" class="text-blue-500">Register</a></p>
            </div>

        </div>
    </div>
</body>

</html>