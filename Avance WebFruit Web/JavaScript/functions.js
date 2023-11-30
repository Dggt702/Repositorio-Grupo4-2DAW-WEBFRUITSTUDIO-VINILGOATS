window.onload = inicio; // Cargamos toda la página lo primero

function inicio()
{
    let boton = document.getElementById("submitButton"); // Cogemos el id del boton para que luego
    boton.addEventListener("click", validar); // Al hacer click podamos validarlo

    var mostrarMas = document.getElementById("mostrarMas"); // Cogemos el id de mostrarMas para que luego
    mostrarMas.addEventListener("click", mostrarVisibilidad); // Al hacer click muestre toda la info oculta
    let mostrarMenos = document.getElementById("mostrarMenos"); // Cogemos el id de mostrarMenos para que luego
    mostrarMenos.addEventListener("click", quitarVisibilidad); // Al hacer click quite la info oculta

    function mostrarVisibilidad() // Con esta función mostraremos la información oculta
    {
        document.getElementById("infoOculta").style.display = "block"; // Con esto mostraremos la información
        mostrarMas.style.display = "none"; // Con esto dejaremos de mostrar el mensaje de mostrarMas
        mostrarMenos.style.display = "block"; // Con esto mostraremos el mostrarMenos
    }

    function quitarVisibilidad() // Con esta función dejaremos de mostrar la información oculta
    {
        document.getElementById("infoOculta").style.display = "none"; // Con esto dejaremos de mostrar la información
        mostrarMas.style.display = "block"; // Con esto mostraremos el mostrarMas
        mostrarMenos.style.display = "none"; // Con esto dejaremos de mostrar el mensaje de mostrarMenos
    }

    function validarNombre() // Con esta función validamos el nombre
    {
        let elemento = document.getElementById("nombre"); // Cogemos el id del nombre
        let regexN = /^[a-zA-Z]+(?: [a-zA-Z]+)*$/; // La expresión regular del nombre
        let errorN = document.getElementById("errorN"); // Cogemos el id del errorN (el div donde van los errores del nombre, donde vamos a escribir cuáles son los problemas que hemos visto que con el nombre)
        if (elemento.value === "") // Si el campo del nombre está vacío
        {
            errorN.innerHTML = "Debe introducir su nombre."; // Les indicamos en el div errorN que escriban su nombre
            return false;
        }
        else if (!regexN.test(elemento.value)) // Si el nombre que escriben no coincide con la expresión regular
        {
            errorN.innerHTML = "El nombre no cumple con los requisitos."; // Les indicamos en el div errorN que escriban un nombre que cumpla con los requisitos
            return false;
        }
        else if (elemento.validity.patternMismatch) // Si el nombre que escriben no coincide con la expresión regular
        {
            errorN.innerHTML = "El nombre no cumple con los requisitos."; // Les indicamos en el div errorN que escriban un nombre que cumpla con los requisitos
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            errorN.innerHTML = ""; // No saltará ningun error o se borrará el error
        }
        return true;
    }

    function validarEmail() // Con esta función validamos el correo electrónico
    {
        let elemento = document.getElementById("correo"); // Cogemos el id del correo electrónico
        let regexC = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // La expresión regular del correo electrónico
        let errorC = document.getElementById("errorC"); // Cogemos el id del errorC (el div donde van los errores del correo, donde vamos a escribir cuáles son los problemas que hemos visto que con el correo)
        if (elemento.value === "") // Si el campo del correo electrónico está vacío
        {
            errorC.innerHTML = "Debe introducir un email válido."; // Les indicamos en el div errorC que escriban su correo
            return false;
        }
        else if (!regexC.test(elemento.value)) // Si el correo electrónico que escriben no coincide con la expresión regular
        {
            errorC.innerHTML = "El correo electrónico no cumple con los requisitos."; // Les indicamos en el div errorC que escriban un correo que cumpla con los requisitos
            return false;
        }
        else if (elemento.validity.patternMismatch) // Si el correo electrónico que escriben no coincide con la expresión regular
        {
            errorC.innerHTML = "Formato incorrecto. Debe introducir un email válido."; // Les indicamos en el div errorC que escriban un correo que cumpla con los requisitos
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            errorC.innerHTML = ""; // No saltará ningun error o se borrará el error
        }
        return true;
    }

    function validarPassword() // Con esta función validamos la contraseña
    {
        let password = document.getElementById("password"); // Cogemos el id de la contraseña
        let regexP = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/; // La expresión regular de la contraseña
        let errorP = document.getElementById("errorP"); // Cogemos el id del errorP (el div donde van los errores de la contraseña, donde vamos a escribir cuáles son los problemas que hemos visto que con la contraseña)
        if (password.value === "") // Si el campo de la contraseña está vacía
        {
            errorP.innerHTML = "Debe introducir su contraseña. Tiene que tener al menos una mayúscula, una mínuscula, un número y un símbolo."; // Les indicamos en el div errorP que escriban su contraseña
            return false;
        }
        else if (!regexP.test(password.value)) // Si la contraseña que escriben no coincide con la expresión regular
        {
            errorP.innerHTML = "La contraseña no cumple con los requisitos. Tiene que tener al menos una mayúscula, una mínuscula, un número y un símbolo."; // Les indicamos en el div errorP que escriban una contraseña que cumpla con los requisitos
            return false;
        }
        else if (password.validity.patternMismatch) // Si la contraseña que escriben no coincide con la expresión regular
        {
            errorP.innerHTML = "La contraseña no cumple con los requisitos. Tiene que tener al menos una mayúscula, una mínuscula, un número y un símbolo."; // Les indicamos en el div errorP que escriban una contraseña que cumpla con los requisitos
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            errorP.innerHTML = ""; // No saltará ningun error o se borrará el error
        }
        return true;
    }

    function redirigir()
    {
        location.replace("Page2.html");
    }

    function confirmarPassword() // Con esta función validamos la confirmación de la contraseña
    {
        let password = document.getElementById("password"); // Cogemos el id de la contraseña
        let confirmPassword = document.getElementById("confirmPassword");  // Cogemos el id de la confirmacion de la contraseña
        let errorP = document.getElementById("errorP"); // Cogemos el id del errorP (el div donde van los errores de la contraseña, donde vamos a escribir cuáles son los problemas que hemos visto que con la contraseña)
        if (confirmPassword.value === "") // Si el campo de la comfirmación de la contraseña está vacía
        {
            errorP.innerHTML = "Debe confirmar su contraseña."; // Les indicamos en el div errorP que escriban su contraseña
            return false;
        }
        if (password.value !== confirmPassword.value) // Si las contraseñas no coinciden
        {
            errorP.innerHTML = "Las contraseñas no coinciden."; // Les indicamos en el div errorP que escriban la misma contraseña
            return false;
        }
        else // En caso contrario, de que todo esté correcto y hayan escrito todo correcto
        {
            errorP.innerHTML = ""; // No saltará ningun error o se borrará el error
        }
        return true;
    }

    // Con el evento 'blur' hacemos que haga foco en las funciones necesarias de validación:
    document.getElementById("nombre").addEventListener("blur", validarNombre);  
    document.getElementById("correo").addEventListener("blur", validarEmail);
    document.getElementById("password").addEventListener("blur", validarPassword);
    document.getElementById("confirmPassword").addEventListener("blur", confirmarPassword);

    function validar(e) // Con esta función validamos todo el formulario
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