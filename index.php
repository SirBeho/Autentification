<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Incluir archivo de Js y estilos CSS -->
    <script src="./js/funciones.js"  defer></script>
    <link href="./css/output.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <!-- Contenedor principal -->
    <div class="min-h-screen flex flex-wrap justify-center sm:content-center font-['Open_Sans']">
        <!-- Contenedor del formulario de inicio de sesión -->
        <div class="w-full sx:max-w-ssx p-6 sm:p-12 sm:border border-gray-BD  rounded-3xl text-gray-33">

            <!-- Mostrar logotipo "devchallenges" -->
            <img class="ms-1" src="./svg/devchallenges.svg" alt="logo" >

            <!-- Título -->
            <div class="my-8">
                <h3 class="font-semibold text-lg leading-snug">Login</h3>
            </div>

            <!-- Formulario de inicio de sesión -->
            <form action="./php/login.php" method="post" class=" flex flex-col gap-4 relative text-gray-500">
                          
                <!-- Campo para el correo electrónico -->
                <div class="flex items-center gap-3 border border-gray-BD rounded-lg p-3 ps-4">
                    <div class="w-4" ><img  src="./svg/email.svg" alt="logo"></div>
                    <input  class="outline-none w-full " type="email" name="email" autocomplete="off" placeholder="Email" value="<?php echo isset($_SESSION['login_email']) ? ($_SESSION['login_email']  ): ''; unset($_SESSION['login_email']); ?>" required>
                </div>
                <!-- Campo para la contraseña -->
                <div class="flex items-center gap-3 border border-gray-BD rounded-lg p-3 ps-4">
                    <div class="w-4"><img src="./svg/password.svg" alt="logo"></div>
                    <input class="outline-none w-full" type="password" name="password" autocomplete="off" placeholder="Password" required >
                </div>
      
                <!-- Mostrar mensaje de error si está configurado -->
                <?php
                if (isset($_SESSION['error_message'])) {
                    echo '<p id="msj" class="text-red-500 w-full text-center absolute transform duration-500 ease-in-out mb-8 bottom-8" >' . $_SESSION['error_message'] . '</p>';
                    unset($_SESSION['error_message']);
                }
                ?>

                <!-- Botón para enviar el formulario -->
                <button class="w-full p-1.5 mt-2 bg-blue-500 rounded-lg text-sm leading-normal font-semibold text-white" type="submit">Login</button>
            </form>
            
            <!-- Sección de inicio de sesión con redes sociales -->
            <div class="mt-8 flex flex-col gap-6 items-center text-sm text-gray-500">
                <span class="w-fit">or continue with these social profile</span>
                <div class="w-fit  flex gap-5">
                    <button><img src="./svg/Google.svg" alt="logo" ></button>
                    <button><img src="./svg/Facebook.svg" alt="logo"></button>
                    <button><img src="./svg/Twitter.svg" alt="logo"></button>
                    <button><img src="./svg/Gihub.svg" alt="logo"></button>
                </div>
                <!-- Enlace para registrarse si no se tiene una cuenta -->
                <p class="w-fit text-[17px] text-gray-33">Don't have an account yet? <a href="./pages/register.php" class="text-blue-500">Register</a></p>
            </div>

        </div>
    </div>
</body>

</html>
