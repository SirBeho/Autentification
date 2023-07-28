<?php
// Iniciar sesión y redirigir a la página de inicio de sesión si no hay una sesión activa
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    die();
}

// Extraer información del usuario de la sesión activa
extract($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Incluir fuentes de Google y archivo de estilos CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500;700;900&display=swap">
    <link href="../css/output.css" rel="stylesheet" />
    <title>Profile</title>
</head>

<body>
    <!-- Contenedor principal -->
    <div class="min-h-screen sx:px-4 flex flex-col items-center font-['Noto_Sans'] bg-gray-50 ">

        <?php include "./nav.php" ?>

        <!-- Encabezado para la sección de información personal -->
        <div class="w-fit text-center m-5">
            <h1 class="text-3xl">Personal info</h1>
            <h3 class="text-base font-light my-4">Basic info, like your name and photo</h3>
        </div>

        <!-- Cuadro de perfil -->
        <div id="cuadro" class="w-full max-w-3xl sx:border border-gray-BD rounded-xl text-gray-33">

            <!-- Encabezado del cuadro -->
            <div class="px-5 sm:px-12 py-8 relative flex flex-row justify-between items-center">
                <div>
                    <h3 class="font-normal text-xl leading-snug text-black">Profile</h3>
                    <p class="text-sm font-normal text-gray-500">Some info may be visible to others people</p>
                </div>

                <!-- Enlace para editar el perfil -->
                <a href="./profile_edit.php" type="submit" class="flex justify-center items-center w-24 h-8 border border-gray-500 rounded-xl text-gray-500">
                    <span>Edit</span>
                </a>

                <!-- Mostrar mensaje de éxito si está configurado -->
                    <?php
                    if (isset($_SESSION['success_message'])) {
                        echo '<span id="msj" class="text-green-500 text-xl w-full text-center absolute transform duration-500 ease-in-out left-0 bottom-8">' . $_SESSION['success_message'] . '</span>';
                        unset($_SESSION['success_message']);
                    }
                    ?>

            </div>

            
          
            <!-- Formulario para mostrar la información del perfil -->
            <form class="flex flex-col text-gray-BD text-sm leading-6">

                <!-- Sección de la foto de perfil -->
                <div class="flex items-center justify-between sm:justify-start border-t border-gray-BD p-2 px-5 sm:px-12">
                    <h3 class="w-52">PHOTO</h3>
                    <div class="h-20 w-20  overflow-hidden rounded-lg ">
                        <img class="w-full h-full object-cover" src="../pictures/<?php echo is_file("../pictures/photo_".$id) ? "photo_".$id : "usuario.jpg" ?>" alt="">
                    </div>
                </div>

                <!-- Sección del nombre -->
                <div class="flex items-center justify-between sm:justify-start border-t border-gray-BD p-6  px-5 sm:px-12">
                    <h3 class="w-52">NAME</h3>
                    <h3 class="text-lg text-gray-33 whitespace-nowrap"><?php echo $name ?></h3>
                </div>

                <!-- Sección de la biografía -->
                <div class="flex items-center justify-between sm:justify-start border-t border-gray-BD p-6  px-5 sm:px-12">
                    <h3 class="w-52">BIO</h3>
                    <h3 class="max-w-md text-lg text-gray-33 overflow-hidden whitespace-nowrap text-ellipsis "><?php echo $bio ?></h3>
                </div>

                <!-- Sección del teléfono -->
                <div class="flex items-center justify-between sm:justify-start border-t border-gray-BD p-6 px-5 sm:px-12">
                    <h3 class="w-52">PHONE</h3>
                    <h3 class="text-lg text-gray-33 whitespace-nowrap"><?php echo $phone ?></h3>
                </div>

                <!-- Sección del correo electrónico -->
                <div class="flex items-center justify-between sm:justify-start border-t border-gray-BD p-6 px-5 sm:px-12">
                    <h3 class="w-52">EMAIL</h3>
                    <h3 class="text-lg text-gray-33 whitespace-nowrap"><?php echo $email ?></h3>
                </div>

                <!-- Sección de la contraseña -->
                <div class="flex items-center justify-between  sm:justify-start border-t border-gray-BD p-6 px-5 sm:px-12">
                    <h3 class="w-52">PASSWORD</h3>
                    <h3 class="text-lg text-gray-33 whitespace-nowrap">••••••••••••</h3>
                </div>

            </form>

        </div>
    </div>

</body>

</html>
