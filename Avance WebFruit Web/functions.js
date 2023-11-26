
document.getElementById('registroForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Realizar validación de campos aquí antes de enviar el formulario
    if (validarFormulario()) {
        nombreUsuario = document.getElementById("nombreCampo").value;
        localStorage.setItem("userRegister",true);
        localStorage.setItem("nUser",nombreUsuario);
        location.href = "Page2.html";
        
        
        // Aquí puedes enviar los datos al servicio web utilizando AJAX o Fetch
    }
});
function desloguear(){
    localStorage.clear();
    location.href = "Page2.html";
}

function confirmacion(){
    userName = localStorage.getItem("nUser");

    if(localStorage.length===0){
        document.getElementById("usuarioFR").style.display="flex";
        document.getElementById("usuarioTR").style.display="none";
    }else{
        document.getElementById("usuarioFR").style.display="none";
        document.getElementById("usuarioR").innerHTML=userName;
    }
}


function cargar(){
    confirmacion();
    slider();
}    

function validarFormulario() {
    // Realizar validación de cada campo aquí
    // Puedes mostrar mensajes de error y cambiar el estilo de los campos si es necesario

    // Ejemplo de validación de contraseña y confirmación de contraseña
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
        alert('Las contraseñas no coinciden');
        return false;
    }

    // Validación adicional para la contraseña según tus criterios
    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!regex.test(password)) {
        alert('La contraseña no cumple con los requisitos');
        return false;
    }

    return true;
}

function slider(){

const btnDerecho = document.querySelector("#btnSliderDerecha");
const btnIzquierdo = document.querySelector("#btnSliderIzquierda");

let sliderInner=document.querySelector(".slider");
let images = sliderInner.querySelectorAll("img");
let index = 1;

function slideAutomatico(){
    let percentage = index * -100;
    sliderInner.style.transform = "translateX("+percentage+"%)";
    index++;

    if(index>images.length - 1){
        index=0;
        
    }
}

function slideManualIzquierda(){
      clearInterval(intervalo);
    
    let percentage = index * -100;
    index--;
    sliderInner.style.transform = "translateX("+percentage+"%)";
    if(index<=0){
        index=1;
    }
    intervalo=setInterval(slideAutomatico,5000);
}

function slideManualDerecha(){
    clearInterval(intervalo);
    let percentage = index * -100;
    sliderInner.style.transform = "translateX("+percentage+"%)";
    index++;
    if(index>images.length-1){
        index=0;
    }
    if(index<=0){
        index=1;
    }
    intervalo=setInterval(slideAutomatico,5000);
}



var intervalo=setInterval(slideAutomatico,5000);
btnDerecho.addEventListener("click",slideManualDerecha);
btnIzquierdo.addEventListener("click",slideManualIzquierda);



}