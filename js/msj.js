
export function Msj(){
    const msj = document.getElementById("msj") //Mensaje de Errores y succes
    if(msj){
        msj.classList.remove("bottom-16"); 
        msj.classList.add("bottom-8");    
        setTimeout(() => {
            console.log(msj);
            
            msj.remove();
            
        }, 5000); 
    }
}
Msj();
