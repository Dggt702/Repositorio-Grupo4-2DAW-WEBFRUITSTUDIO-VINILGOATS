document.addEventListener("click", validar); // Al hacer click 

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
        errorN.innerHTML = "Debe introducir su nombre."; // este funciona
        return false;
    }
    else if (elemento.validity.patternMismatch) 
    {
        errorN.innerHTML = "El nombre no cumple con los requisitos";
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
    if (!regexC.test(elemento.value)) 
    {
       errorC.innerHTML = "El correo electrónico no cumple con los requisitos";
    }
    if (elemento.value === "")
    {
        errorC.innerHTML = "Debe introducir un email válido."; // este funciona
        return false;
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
    let elemento = document.getElementById("password");
    let regexP = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    let errorP = document.getElementById("errorP");
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    if (!regexP.test(elemento.value)) 
    {
       errorP.innerHTML = "La contraseña no cumple con los requisitos. Tiene que tener al menos una mayúscula, una mínuscula, un número y un símbolo.";
    }
    if (password !== confirmPassword) {
        errorP.innerHTML = "Las contraseñas no coinciden";
        return false;
    }
    if (elemento.value === "")
    {
        errorP.innerHTML = "Debe introducir su contraseña.";
        return false;
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

function pulsarBoton() // esta funcion no funciona pero es DETERMINANTE QUE FUNCIONE
{
    let boton = document.getElementById("submitButton");
    if (boton.onclick === true)
    {   
        alert("¡holi!")
        return true;
    }
        
    else
        return false; 
}

function validar(e)
{
    if(validarNombre() && validarEmail() && validarPassword() && pulsarBoton() && confirm("¿Seguro que quiere enviar el formulario?"))
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