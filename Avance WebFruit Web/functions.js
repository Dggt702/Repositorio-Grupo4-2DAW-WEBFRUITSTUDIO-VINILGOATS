document.getElementById('registroForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Realizar validación de campos aquí antes de enviar el formulario
    if (validarFormulario()) {
        location.href = "Page2.html" ;
        // Aquí puedes enviar los datos al servicio web utilizando AJAX o Fetch
    }
});

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