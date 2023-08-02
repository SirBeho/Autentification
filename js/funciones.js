// Función para mostrar la imagen seleccionada en un campo de archivo de entrada
function showImg(event) {
    
    const fileInput = event.target; // Obtener el campo de archivo de entrada
    const imagePreview = document.getElementById("imagePreview"); // Obtener el elemento de vista previa de la imagen

    if (fileInput.files && fileInput.files[0]) {
        // Si se selecciona un archivo
        const reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.src = e.target.result; // Mostrar la imagen seleccionada en la vista previa
        };

        reader.readAsDataURL(fileInput.files[0]); // Leer el contenido del archivo seleccionado
    } else {
        // Si no se selecciona un archivo, mostrar la imagen predeterminada
        console.log("errors");
        imagePreview.src = `./pictures/<?php echo is_file("../pictures/photo_".$id) ? "photo_".$id : "usuario.jpg" ?>`;
    } 
}

//Mensaje de Errores y succes
function Msj(){
    const msj = document.getElementById("msj") ;
        
    if(msj){
        
        //msj.classList.add("bottom-0"); 
        //msj.classList.remove("bottom-8"); 
        setTimeout(() => { 
            msj.classList.remove("bottom-8"); 
            msj.classList.add("bottom-0");
        }, 1); 
        setTimeout(() => { 
            msj.remove();
        }, 5000); 
    }
}
Msj() ;

function delaySubmitForm(event) {
    console.log(event);

    // Muestra la pantalla de carga
    var loadingScreen = document.createElement('iframe');
    loadingScreen.src = 'loading.php';
    loadingScreen.id = 'loading'
    loadingScreen.style.position = 'fixed';
    loadingScreen.style.top = '0';
    loadingScreen.style.left = '0';
    loadingScreen.style.width = '100vw';
    loadingScreen.style.height = '100vh';
    

    loadingScreen.style.background = '#8c8be673';
    document.body.appendChild(loadingScreen);

}