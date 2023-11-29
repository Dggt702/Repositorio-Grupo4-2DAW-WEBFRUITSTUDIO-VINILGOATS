window.onload = inicio;

function inicio()
{
    let boton = document.getElementById("submitButton"); // Cogemos el id del boton para que luego
    boton.addEventListener("click", validar); // Al hacer click podamos validarlo

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
        let password = document.getElementById("password");
        let regexP = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        let errorP = document.getElementById("errorP");
        if (password.value === "")
        {
            errorP.innerHTML = "Debe introducir su contraseña. Tiene que tener al menos una mayúscula, una mínuscula, un número y un símbolo.";
            return false;
        }
        else if (!regexP.test(password.value)) 
        {
        errorP.innerHTML = "La contraseña no cumple con los requisitos. Tiene que tener al menos una mayúscula, una mínuscula, un número y un símbolo.";
        }
        
        else if (password.validity.patternMismatch) 
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

    function redirigir()
    {
        location.replace("Page2.html");
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
        if (password.value !== confirmPassword.value) {
            errorP.innerHTML = "Las contraseñas no coinciden.";
            return false;
        }
        else
        {
            errorP.innerHTML = "";
        }
        return true;
    }

    document.getElementById("nombre").addEventListener("blur", validarNombre);
    document.getElementById("correo").addEventListener("blur", validarEmail);
    document.getElementById("password").addEventListener("blur", validarPassword);
    document.getElementById("confirmPassword").addEventListener("blur", confirmarPassword);

    function validar(e) 
    {
        // Realiza las verificaciones una por una
        if (!validarNombre()) 
        {
            e.preventDefault();
            return false;
        }
    
        if (!validarEmail()) 
        {
            e.preventDefault();
            return false;
        }
    
        if (!validarPassword()) 
        {
            e.preventDefault();
            return false;
        }
    
        if (!confirmarPassword()) 
        {
            e.preventDefault();
            return false;
        }
    
        // Pregunta al usuario antes de enviar el formulario
        if (confirm("¿Seguro que quiere enviar el formulario?")) 
        {
            // Redirige a la página deseada
            redirigir();
            return true;
        } else 
        {
            e.preventDefault();
            return false;
        }
    }
}