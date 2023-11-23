document.addEventListener("click", validar);

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
}