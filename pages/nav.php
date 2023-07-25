<!-- Incluir archivo JavaScript "menu.js" de forma asíncrona -->
<script type="module" src="../js/menu.js" defer></script>

<!-- Contenedor principal con diseño flexible, padding y logotipo -->
<div class="flex justify-between w-screen px-4 sm:px-12 py-4 relative">

    <!-- Sección del logotipo -->
    <div class="w-40">
        <!-- Mostrar logotipo "devchallenges" -->
        <img class="ms-2" src="../svg/devchallenges.svg" alt="logo" />
    </div>

    <!-- Sección del control de menú -->
    <div id="control-menu" class="flex items-center gap-2 cursor-pointer">
        <!-- Contenedor de la imagen del perfil del usuario -->
        <div class="h-8 w-8 overflow-hidden rounded-lg">
            <!-- Mostrar imagen de perfil del usuario o "usuario.jpg" si no está definida -->
            <img id="imagePreviewmenu" class="w-full h-full object-cover" src="../pictures/<?php echo $img ? $img : "usuario.jpg"; ?>" alt="">
        </div>

        <!-- Mostrar nombre del usuario (oculto en pantallas pequeñas) -->
        <span class="hidden sm:block font-semibold text-xs leading-snug"><?php echo $name ?></span>

        <!-- Flecha hacia abajo (oculta en pantallas pequeñas) para indicar menú desplegable -->
        <div class="hidden sm:block w-4 rotate-180">
            <img src="../svg/arrow.svg" alt="logo" />
        </div>
    </div>

    <!-- Menú desplegable -->
    <div id="menu" class="border border-[#BDBDBD] rounded-xl p-2 w-36 bg-white text-xs absolute top-16 right-[5%] overflow-hidden h-0 opacity-0 transform duration-500 ease-in-out">
        <!-- Opción 1: Ir a la página de perfil del usuario -->
        <div class="border-b">
            <a href="./profile.php" class="flex items-center gap-2 p-2 hover:bg-gray-100 rounded-xl cursor-pointer">
                <div class="w-5">
                    <img src="../svg/profile.svg" alt="">
                </div>
                <span>My Profile</span>
            </a>

            <!-- Opción 2: Ir a la página de chat de grupo -->
            <a href="" class="flex items-center gap-2 p-2 mb-2 hover:bg-gray-100 rounded-xl cursor-pointer">
                <div class="w-5">
                    <img src="../svg/groupchat.svg" alt="">
                </div>
                <span>Group chat</span>
            </a>
        </div>

        <!-- Opción 3: Cerrar sesión -->
        <a href="../php/logout.php" class="flex items-center gap-2 mt-2 p-2 hover:bg-gray-100 rounded-xl text-red-500 cursor-pointer">
            <div class="w-5">
                <img src="../svg/logout.svg" alt="">
            </div>
            <span>Logout</span>
        </a>
    </div>
</div>
