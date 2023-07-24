   
  const boton = document.getElementById("control-menu");
  const cuadro = document.getElementById("cuadro");
  const targetDiv = document.getElementById("menu");
  boton.addEventListener('click', function () {
     targetDiv.classList.toggle("h-0");
     targetDiv.classList.toggle("h-36");
     targetDiv.classList.toggle("opacity-0");
 });

 cuadro.addEventListener('mouseover', function () {
     targetDiv.classList.add("opacity-0");
     targetDiv.classList.add("h-0");
     targetDiv.classList.remove("h-36");
 });

 function showImg(event) {
    const fileInput = event.target;
    const imagePreview = document.getElementById("imagePreview");
   

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.src = e.target.result;
          
            console.log(e.target.result,"hola")
        };
        
        reader.readAsDataURL(fileInput.files[0]);
    } else {
        console.log("errors")
        imagePreview.src = `./pictures/<?php echo $img ? $img : "usuario.jpg"; ?>`;
       
    } 
}