import { Msj } from './msj.js';
Msj();

// Obtener referencias a elementos del DOM
const boton = document.getElementById("control-menu"); // Botón para controlar el menú
const cuadro = document.getElementById("cuadro"); // Cuadro principal
const targetDiv = document.getElementById("menu"); // Menú desplegable
const modal_password = document.getElementById('passwordForm');
/* const password = document.getElementById("edit_password"); // Cambiar Contraseña */


// Agregar un evento de click al botón para mostrar/ocultar el menú desplegable
boton.addEventListener('click', function () {
    targetDiv.classList.toggle("h-0"); 
    targetDiv.classList.toggle("h-36"); 
    targetDiv.classList.toggle("opacity-0"); 
});

// Agregar un evento al cuadro principal para ocultar el menú cuando se pasa el mouse sobre él
cuadro.addEventListener('mouseover', function () {
    targetDiv.classList.add("opacity-0"); 
    targetDiv.classList.add("h-0"); 
    targetDiv.classList.remove("h-36"); 
});

modal_password.addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente

    const password1 = modal_password.password1.value;
    const password2 = modal_password.password2.value;

    if (password1 !== password2) {
        // Las contraseñas no coinciden, muestra un mensaje de error
        // modal_password.innerHTML += `<p id="msj" class="text-red-500 w-full text-center  text-xs bottom-8" >Las contraseñas no coinciden. Por favor, inténtelo nuevamente.</p>`
         if (!document.getElementById('msj')) {
            const errorMessage = document.createElement('p');
            errorMessage.id = 'msj';
            errorMessage.className = 'text-red-500 w-full text-center absolute transform duration-500 ease-in-out bottom-16';
            errorMessage.textContent = 'Las contraseñas no coinciden. Por favor, inténtelo nuevamente.';
            modal_password.appendChild(errorMessage);
        }   

        Msj();

    } else {
        // Las contraseñas coinciden, puedes enviar el formulario
        this.submit();
    }
});



// Función para mostrar la imagen seleccionada en un campo de archivo de entrada
function showImg(event) {
    const fileInput = event.target; // Obtener el campo de archivo de entrada
    const imagePreview = document.getElementById("imagePreview"); // Obtener el elemento de vista previa de la imagen

    if (fileInput.files && fileInput.files[0]) {
        // Si se selecciona un archivo
        const reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.src = e.target.result; // Mostrar la imagen seleccionada en la vista previa
            console.log(e.target.result, "hola");
        };

        reader.readAsDataURL(fileInput.files[0]); // Leer el contenido del archivo seleccionado
    } else {
        // Si no se selecciona un archivo, mostrar la imagen predeterminada
        console.log("errors");
        imagePreview.src = `./pictures/<?php echo $img ? $img : "usuario.jpg"; ?>`;
    }
}



    
  

   
   