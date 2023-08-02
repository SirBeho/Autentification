<?php
// Iniciar sesión y redirigir a la página de inicio de sesión si no hay una sesión activa
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    die();
}
//hola
// Extraer información del usuario de la sesión activa
extract($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Incluir fuentes de Google y archivo de estilos CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500;700;900&display=swap">
    <link href="../css/output.css" rel="stylesheet" />
    <link href="../css/output.css" rel="stylesheet" />
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="../js/funciones.js"></script>
    <title>Edit Profile</title>
</head>

<body>
    <!-- Contenedor principal -->
    <div class="min-h-screen flex flex-col items-center p-4 font-['Noto_Sans'] bg-gray-50 ">

        <?php include "nav.php"  ?>
        
        <!-- Contenedor para el botón de volver atrás -->
        <div class="w-full max-w-3xl ">
            <a href="profile.php" class="text-lg text-blue-500" href="profile.html">&lt; Back</a>
        </div>

        <!-- Cuadro de edición del perfil -->
        <div id="cuadro" class="w-full max-w-3xl sx:border sx:px-8 py-8 my-5 border-gray-BD rounded-xl text-gray-33">

            <!-- Encabezado del cuadro -->
            <div  onclick="showLoadingScreen()"  class="pb-5 flex flex-row justify-between items-center">
                <div>
                    <h3  class="font-normal text-xl leading-snug text-black">Change Info</h3>
                    <p class="text-xs font-normal text-gray-500">Changes will be reflected to every service</p>
                </div>
            </div>

            <!-- Formulario para editar el perfil -->
            <form action="../php/edit.php" onsubmit="delaySubmitForm(event)" id="profile_edit_form"    enctype="multipart/form-data"  method="post" class="flex flex-col gap-5 text-xs leading-6 relative">

                <!-- Cambiar foto de perfil -->
                <label class="w-fit flex gap-5 items-center cursor-pointer">
                    <input type="file" name="profile_photo" accept="image/*" class="hidden" onchange="showImg(event)">
                    <div class="h-18 w-18 flex items-center justify-center overflow-hidden relative rounded-lg">
                        <img class="absolute w-1/3" src="../svg/camara.svg" alt="">
                        <img id="imagePreview" class="w-full h-full object-cover" src="../pictures/<?php echo is_file("../pictures/photo_".$id) ? "photo_".$id : "usuario.jpg" ?>" alt="">
                    </div>
                    <h3 class="w-52 text-gray-500">CAMBIAR FOTO</h3>
                </label>

                <!-- Campos de edición del perfil -->
                <label class="items-center">
                    <span>Name</span><br>
                    <input placeholder="Enter your name..." name="name" class="sx:max-w-sm w-full text-sm border border-gray-400 rounded-xl bg-transparent p-3" value="<?php echo $name ?>"></input>
                </label>

                <label class="items-center">
                    <span>Bio</span><br>
                    <textarea placeholder="Enter your bio..." rows="3" name="bio" class="sx:max-w-sm w-full text-sm border border-gray-400 rounded-xl bg-transparent p-3 resize-none"><?php echo $bio ?></textarea>
                </label>

                <label class="items-center">
                    <span>Phone</span><br>
                    <input placeholder="Enter your phone..." name="phone" class="sx:max-w-sm w-full text-sm border border-gray-400 rounded-xl bg-transparent p-3" value="<?php echo $phone ?>"></input>
                </label>

                <label class="items-center">
                    <span>Email</span><br>
                    <input placeholder="Enter your email..." name="email" class="sx:max-w-sm w-full text-sm border border-gray-400 rounded-xl bg-transparent p-3" value="<?php echo $email ?>"></input>
                </label>

                <label class="items-center ">
                    <span>Password</span><br>
                    <div class="relative flex items-center sx:max-w-sm w-full">
                        <input placeholder="Enter your password..." name="password" class="w-full text-sm border border-gray-400 rounded-xl bg-transparent p-3 pr-10" value="*********">
                        <img  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" id="edit_password" class="absolute right-4 w-5 h-5 cursor-pointer" src="../svg/lapiz.svg" alt="">
                    </div>
                
               
                </label>
                <!-- Mostrar mensaje de error si está configurado -->
                <?php
                if (isset($_SESSION['error_message'])) {
                    echo '<p id="msj" class="text-red-500  absolute transform duration-500 ease-in-out mb-9 bottom-8" >' . $_SESSION['error_message'] . '</p>';
                    unset($_SESSION['error_message']);
                }
                if (isset($_SESSION['success_message'])) {
                    echo '<p id="msj" class="text-green-500 absolute transform duration-500 ease-in-out mb-9 bottom-8">' . $_SESSION['success_message'] . '</p>';
                    unset($_SESSION['success_message']);
                }
                ?>
                
                <!-- Botón para guardar los cambios -->
                <button class="w-min px-5 py-2 bg-blue-500 rounded-lg text-sm leading-normal font-semibold text-white" type="submit"> Save </button>
            </form>
            
            <?php include "./modal_password.php" ?>
        </div>
    </div>
    
</body>

</html>
