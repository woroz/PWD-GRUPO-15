document.getElementById('formNuevoAuto').addEventListener('submit', function(event) {
    var patente = document.getElementById('patente').value;
    var marca = document.getElementById('marca').value;
    var modelo = document.getElementById('modelo').value;
    var nroDni = document.getElementById('nroDni').value;
    var errorMessage = '';

    // Validaciones JavaScript
    if (!patente) {
        errorMessage = 'La patente es obligatoria.';
        document.getElementById('error-message-patente').innerText = errorMessage;
        event.preventDefault();
    }

    if (!marca) {
        errorMessage = 'La marca es obligatoria.';
        document.getElementById('error-message-marca').innerText = errorMessage;
        event.preventDefault();
    }

    if (!modelo) {
        errorMessage = 'El modelo es obligatorio.';
        document.getElementById('error-message-modelo').innerText = errorMessage;
        event.preventDefault();
    }

    if (!nroDni) {
        errorMessage = 'El DNI del dueño es obligatorio.';
        document.getElementById('error-message-nroDni').innerText = errorMessage;
        event.preventDefault();
    }
});