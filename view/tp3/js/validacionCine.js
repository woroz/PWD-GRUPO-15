$('#formCine').submit(function(event) {
    var titulo = $('#titulo').val(); 
    var actores = $('#actores').val(); 
    var director = $('#director').val(); 
    var guion = $('#guion').val(); 
    var produccion = $('#produccion').val(); 
    var anio = $('#anio').val(); 
    var nacionalidad = $('#nacionalidad').val(); 
    var genero = $('#genero').val(); 
    var duracion = $('#duracion').val(); 
    var restriccion = $('input[name="restriccion"]:checked').val();
    var miArchivo = $('#miArchivo').val(); 

    const soloLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

    // Validación: campo obligatorio
    if (!titulo) {
        event.preventDefault(); 
        $('#error-message-titulo').text('El título es obligatorio.');
    }else {
        $('#error-message-titulo').text('');
    }

        if (!actores) {
        event.preventDefault(); 
        errorMessage = 'Los actores son obligatorios.';
        $('#error-message-actores').text(errorMessage);
    }else if (!soloLetras.test(titulo)) {
        $('#error-message-titulo').text('El título solo puede contener letras.');
    }else {
        $('#error-message-titulo').text('');
    }

        if (!director) {
        event.preventDefault(); 
        errorMessage = 'El director es obligatorio.';
        $('#error-message-director').text(errorMessage);
    }else if (!soloLetras.test(titulo)) {
        $('#error-message-titulo').text('El título solo puede contener letras.');
    }else {
        $('#error-message-titulo').text('');
    }

        if (!guion) {
        event.preventDefault(); 
        errorMessage = 'El guion es obligatorio.';
        $('#error-message-guion').text(errorMessage);
    }else if (!soloLetras.test(titulo)) {
        $('#error-message-titulo').text('El título solo puede contener letras.');
    }else {
        $('#error-message-titulo').text('');
    }

        if (!produccion) {
        event.preventDefault(); 
        errorMessage = 'La producción es obligatoria.';
        $('#error-message-produccion').text(errorMessage);
    }

        if (!anio) {
        event.preventDefault(); 
        errorMessage = 'El año es obligatorio.';
        $('#error-message-anio').text(errorMessage);
    }else if((anio < 0) || (anio > 2025)){
        event.preventDefault(); 
        errorMessage = 'El año no existe';
        $('#error-message-duracion').text(errorMessage);
    }else {
        $('#error-message-titulo').text('');
    }

        if (!nacionalidad) {
        event.preventDefault(); 
        errorMessage = 'La nacionalidad es obligatoria.';
        $('#error-message-nacionalidad').text(errorMessage);
    }else if (!soloLetras.test(titulo)) {
        $('#error-message-titulo').text('El título solo puede contener letras.');
    }else {
        $('#error-message-titulo').text('');
    }

        if (!genero) {
        event.preventDefault(); 
        errorMessage = 'El genero es obligatorio.';
        $('#error-message-genero').text(errorMessage);
    }else {
        $('#error-message-titulo').text('');
    }

        if (!duracion) {
        event.preventDefault(); 
        errorMessage = 'La duración es obligatoria.';
        $('#error-message-duracion').text(errorMessage);
    }else if((duracion < 0) || (duracion > 300)){
        event.preventDefault(); 
        errorMessage = 'Error con la duración';
        $('#error-message-duracion').text(errorMessage);
    }else {
        $('#error-message-titulo').text('');
    }

        if (!restriccion) {
        event.preventDefault(); 
        errorMessage = 'La restricción es obligatoria.';
        $('#error-message-restriccion').text(errorMessage);
    }else {
        $('#error-message-titulo').text('');
    }

        if (!miArchivo) {
        event.preventDefault(); 
        errorMessage = 'El archivo es obligatorio.';
        $('#error-message-archivo').text(errorMessage);
    }else {
        $('#error-message-titulo').text('');
    }
});