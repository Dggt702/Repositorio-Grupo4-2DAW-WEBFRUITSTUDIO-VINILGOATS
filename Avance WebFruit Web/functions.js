<<<<<<< HEAD

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
=======
document.addEventListener("click", validar);
>>>>>>> e1fc459ab23b2608996a94bbc37e8a5611dd3ffe

function validarFormulario() 
{
    // Ejemplo de validación de contraseña y confirmación de contraseña
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
        error(elemento, "Las contraseñas no coinciden");
        return false;
    }

    // Validación adicional para la contraseña según tus criterios
    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!regex.test(password)) {
        error(elemento, "La contraseña no cumple con los requisitos");
        return false;
    }

    return true;
}

<<<<<<< HEAD
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



=======
function validarNombre()
{
    let elemento = document.getElementById("nombre");
    let regexN = /^[a-zA-Z]+(?: [a-zA-Z]+)*$/;
    let errorN = document.getElementById("errorN");
    if (!regexN.test(elemento.value)) 
    {
       errorN.innerHTML = "El nombre no cumple con los requisitos";
    }
    if (elemento.value === "")
    {
        errorN.innerHTML = "Debe introducir su nombre.";
        return false;
    }
    else if (elemento.validity.patternMismatch) 
    {
        errorN.innerHTML = "Formato incorrecto.";
        return false;
    }
    return true;
}

function validarEmail()
{
    let elemento = document.getElementById("correo");
    let regexC = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let errorC = document.getElementById("errorC");
    if (!regexC.test(elemento.value)) 
    {
       errorC.innerHTML = "El correo electrónico no cumple con los requisitos";
    }
    if (elemento.value === "")
    {
        errorC.innerHTML = "Debe introducir un email válido.";
        return false;
    }
    else if (elemento.validity.patternMismatch) 
    {
        errorC.innerHTML = "Formato incorrecto. Debe introducir un email válido.";
        return false;
    }
    return true;
}

function validar(e)
{
    if(validarNombre() && validarEmail() && validarFormulario() && confirm("¿Seguro que quiere enviar el formulario?"))
    {
        location.href = "Page2.html";
        return true;
    }
    else
    {
        e.preventDefault();
        return false;
    }
>>>>>>> e1fc459ab23b2608996a94bbc37e8a5611dd3ffe
}