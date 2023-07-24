// Obtener referencias a elementos del DOM
const boton = document.getElementById("control-menu"); // Botón para controlar el menú
const cuadro = document.getElementById("cuadro"); // Cuadro principal
const targetDiv = document.getElementById("menu"); // Menú desplegable

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
