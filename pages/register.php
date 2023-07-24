<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Incluir archivo de estilos CSS -->
    <link href="../css/output.css" rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <!-- Contenedor principal -->
    <div class="min-h-screen flex flex-wrap justify-center sm:content-center font-['Open_Sans']">
        <!-- Contenedor del formulario de registro -->
        <div class="w-full sm:max-w-[430px] p-6 sm:p-12 sm:border border-[#BDBDBD] rounded-3xl text-[#333]">

            <!-- Mostrar logotipo "devchallenges" -->
            <img class="ms-2" src="../svg/devchallenges.svg" alt="logo" >

            <!-- Título y descripción -->
            <div class="my-8">
                <h3 class="font-semibold text-lg leading-snug">Join thousands of learners from around the world</h3>
                <p class="mt-3 text-base leading-snug">Master web development by making real-life projects. There are multiple paths for you to choose</p>
            </div>

            <!-- Formulario de registro -->
            <form action="../php/register.php" method="post" class="flex flex-col gap-4 text-gray-500">
                <!-- Campo para el correo electrónico -->
                <div class="flex items-center gap-3 border border-[#BDBDBD] rounded-lg p-3 ps-4">
                    <div class="w-4" ><img  src="../svg/email.svg" alt="logo"></div>
                    <input class="outline-none w-full" type="email" autocomplete="off" name="email" placeholder="Email" required >
                </div>
                
                <!-- Campo para la contraseña -->
                <div class="flex items-center gap-3 border border-[#BDBDBD] rounded-lg p-3 ps-4">
                    <div class="w-4"><img src="../svg/password.svg" alt="logo"></div>
                    <input class="outline-none w-full" type="password" autocomplete="off" name="password" placeholder="Password" required >
                </div> 

                <!-- Mostrar mensaje de error si está configurado -->
                <?php
                session_start();
                if (isset($_SESSION['error_message'])) {
                    echo '<p class="text-red-500">' . $_SESSION['error_message'] . '</p>';
                    unset($_SESSION['error_message']);
                }
                ?>

                <!-- Botón para enviar el formulario -->
                <button class="w-full p-1.5 mt-2 bg-blue-500 rounded-lg text-sm leading-normal font-semibold text-white" type="submit">Start Coding Now</button>
            </form>
            
            <!-- Sección de registro con redes sociales -->
            <div class="mt-8 flex flex-col gap-6 items-center text-sm text-gray-500">
                <span class="w-fit">or continue with these social profile</span>
                <div class="w-fit  flex gap-5">
                    <button><img src="../svg/Google.svg" alt="logo"></button>
                    <button><img src="../svg/Facebook.svg" alt="logo"></button>
                    <button><img src="../svg/Twitter.svg" alt="logo"></button>
                    <button><img src="../svg/Gihub.svg" alt="logo"></button>
                </div>
                <p class="w-fit text-[17px] text-[#333]">Already a member? <a href="../index.php" class="text-blue-500">Login</a></p>
            </div>

        </div>
    </div>
</body>

</html>
