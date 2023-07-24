# Página Web de Inicio de Sesión y Registro con Tailwind CSS

Esta es una página web que ofrece la funcionalidad de inicio de sesión y registro para los usuarios, construida utilizando Tailwind CSS. Permite a los usuarios registrarse para crear una cuenta o iniciar sesión si ya tienen una cuenta existente. A continuación, se describen las principales características de la página:

## Funcionalidades:

### 1. Inicio de Sesión (index.php):

- Inicio de sesión de usuarios con dirección de correo electrónico y contraseña.
- Mensaje de error en caso de credenciales incorrectas.

### 2. Registro de Usuarios (register.php):

- Registro de usuarios con dirección de correo electrónico y contraseña.
- Mensaje de error si la dirección de correo electrónico ya está en uso.
- Redirección a la página de edición de perfil después del registro para completar la información.

### 3. Perfil de Usuario (profile.php):

- Visualización de la información personal del usuario, incluyendo foto de perfil, nombre, biografía, número de teléfono y correo electrónico.
- Vista previa de la foto de perfil predeterminada si no se ha cargado una imagen personalizada.

### 4. Edición del Perfil de Usuario (profile_edit.php):

- Edición del perfil del usuario, incluyendo el cambio de nombre, biografía, número de teléfono, correo electrónico y foto de perfil.
- Vista previa de la foto de perfil antes de guardar los cambios.
- Mensajes de éxito o causa del error después de guardar los cambios en el perfil.

### 5. Menú Desplegable (nav.php):

- Menú de navegación desplegable con animación.
- Opción para acceder al perfil del usuario ("My Profile").
- Opción para cerrar sesión ("Logout").

## Tecnologías Utilizadas:

- HTML y CSS para la estructura y diseño de la página web.
- Tailwind CSS para estilos y diseño responsivo.
- PHP para la gestión de sesiones y el manejo de la lógica de inicio de sesión y registro.

## Instalación:

1. Clona este repositorio en tu máquina local utilizando `git clone`.
2. Asegúrate de tener instalado un servidor web (como Apache) y PHP en tu máquina local.
3. Coloca los archivos del repositorio en la carpeta de tu servidor web local.
4. Accede a la página desde tu navegador web visitando la URL del servidor local.

¡Disfruta de la página web de inicio de sesión y registro con el poder de Tailwind CSS! Siéntete libre de personalizar y mejorar la funcionalidad según tus necesidades.