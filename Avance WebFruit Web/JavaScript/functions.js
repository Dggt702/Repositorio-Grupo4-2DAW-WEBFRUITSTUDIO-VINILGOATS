document.addEventListener("click", validar); // Al hacer click 

var mostrarMas = document.getElementById("mostrarMas");
mostrarMas.addEventListener("click", mostrarVisibilidad);
let mostrarMenos = document.getElementById("mostrarMenos");
mostrarMenos.addEventListener("click", quitarVisibilidad);

function mostrarVisibilidad()
{
    document.getElementById("infoOculta").style.display = "block";
    mostrarMas.style.display = "none";
    mostrarMenos.style.display = "block";
}

function quitarVisibilidad()
{
    document.getElementById("infoOculta").style.display = "none";
    mostrarMas.style.display = "block";
    mostrarMenos.style.display = "none";
}

function validarNombre()
{
    let elemento = document.getElementById("nombre");
    let regexN = /^[a-zA-Z]+(?: [a-zA-Z]+)*$/;
    let errorN = document.getElementById("errorN");
    if (elemento.value === "")
    {
       errorN.innerHTML = "Debe introducir su nombre.";
    }
    else if (!regexN.test(elemento.value)) 
    {
        errorN.innerHTML = "El nombre no cumple con los requisitos.";
        return false;
    }
    else if (elemento.validity.patternMismatch) 
    {
        errorN.innerHTML = "El nombre no cumple con los requisitos.";
        return false;
    }
    else
    {
        errorN.innerHTML = "";
    }
    return true;
}

function validarEmail()
{
    let elemento = document.getElementById("correo");
    let regexC = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let errorC = document.getElementById("errorC");
    if (elemento.value === "")
    {
        errorC.innerHTML = "Debe introducir un email válido.";
        return false;
    }
    else if (!regexC.test(elemento.value)) 
    {
       errorC.innerHTML = "El correo electrónico no cumple con los requisitos.";
    }
    else if (elemento.validity.patternMismatch) 
    {
        errorC.innerHTML = "Formato incorrecto. Debe introducir un email válido.";
        return false;
    }
    else
    {
        errorC.innerHTML = "";
    }
    return true;
}

function validarPassword()
{
    let regexP = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    let errorP = document.getElementById("errorP");
    let password = document.getElementById("password");
    if (password.value === "")
    {
        errorP.innerHTML = "Debe introducir su contraseña. Tiene que tener al menos una mayúscula, una mínuscula, un número y un símbolo.";
        return false;
    }
    else if (!regexP.test(elemento.value)) 
    {
       errorP.innerHTML = "La contraseña no cumple con los requisitos. Tiene que tener al menos una mayúscula, una mínuscula, un número y un símbolo.";
    }
    
    else if (elemento.validity.patternMismatch) 
    {
        errorP.innerHTML = "La contraseña no cumple con los requisitos. Tiene que tener al menos una mayúscula, una mínuscula, un número y un símbolo.";
        return false;
    }
    else
    {
        errorP.innerHTML = "";
    }
    return true;
}

function confirmarPassword()
{
    let errorP = document.getElementById("errorP");
    let password = document.getElementById("password");
    let confirmPassword = document.getElementById("confirmPassword");
    if (confirmPassword.value === "")
    {
        errorP.innerHTML = "Debe confirmar su contraseña.";
        return false;
    }
    if (password !== confirmPassword) {
        errorP.innerHTML = "Las contraseñas no coinciden.";
        return false;
    }
    else
    {
        errorP.innerHTML = "";
    }
    return true;
}

function pulsarBoton() // esta funcion ya funciona (CREO)
{
    let boton = document.getElementById("submitButton");
    boton.onclick = function()
    { 
        console.log("Button Clicked");
        return true;
    }   
}

function validar(e)
{
    if(validarNombre() && validarEmail() && validarPassword() && confirmarPassword() && pulsarBoton() && confirm("¿Seguro que quiere enviar el formulario?"))
    {
        location.href = "Page2.html";
        return true;
    }
    else
    {
        e.preventDefault();
        return false;
    }
}