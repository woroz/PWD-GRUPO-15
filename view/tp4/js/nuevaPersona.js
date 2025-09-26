document.getElementById('formNuevaPersona').addEventListener('submit', function(event) {
    var dni = document.getElementById('nroDni').value;
    var apellido = document.getElementById('apellido').value;
    var nombre = document.getElementById('nombre').value;
    var fechaNac = document.getElementById('fechaNac').value;
    var telefono = document.getElementById('telefono').value;
    var domicilio = document.getElementById('domicilio').value;
    var errorMessage = '';

    // Validaciones JavaScript
    if (!dni) {
        errorMessage = 'El DNI es obligatorio.';
        document.getElementById('error-message-dni').innerText = errorMessage;
        event.preventDefault();
    }

    if (!apellido) {
        errorMessage = 'El apellido es obligatorio.';
        document.getElementById('error-message-apellido').innerText = errorMessage;
        event.preventDefault();
    }

    if (!nombre) {
        errorMessage = 'El nombre es obligatorio.';
        document.getElementById('error-message-nombre').innerText = errorMessage;
        event.preventDefault();
    }

    if (!fechaNac) {
        errorMessage = 'La fecha de nacimiento es obligatoria.';
        document.getElementById('error-message-fechaNac').innerText = errorMessage;
        event.preventDefault();
    }

    if (!telefono) {
        errorMessage = 'El telefono es obligatorio.';
        document.getElementById('error-message-telefono').innerText = errorMessage;
        event.preventDefault();
    }

    if (!domicilio) {
        errorMessage = 'El domicilio es obligatorio.';
        document.getElementById('error-message-domicilio').innerText = errorMessage;
        event.preventDefault();
    }




});