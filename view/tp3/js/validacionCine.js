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
        $('#titulo').css('border-color', 'red');
        $('#titulo').css('background-color', '#ffaaaaa1');
    }else {
        $('#error-message-titulo').text('');
        $('#titulo').css('border-color', 'green');
        $('#titulo').css('background-color', '#9afea9a1');
    }

        if (!actores) {
        event.preventDefault(); 
        errorMessage = 'Los actores son obligatorios.';
        $('#error-message-actores').text(errorMessage);
        $('#actores').css('border-color', 'red');
        $('#actores').css('background-color', '#ffaaaaa1');
    }else if (!soloLetras.test(titulo)) {
        $('#error-message-actores').text('El título solo puede contener letras.');
    }else {
        $('#error-message-actores').text('');
        $('#actores').css('border-color', 'green');
        $('#actores').css('background-color', '#9afea9a1');
    }

        if (!director) {
        event.preventDefault(); 
        errorMessage = 'El director es obligatorio.';
        $('#error-message-director').text(errorMessage);
        $('#director').css('border-color', 'red');
        $('#director').css('background-color', '#ffaaaaa1');
    }else if (!soloLetras.test(titulo)) {
        $('#error-message-director').text('El título solo puede contener letras.');
    }else {
        $('#error-message-director').text('');
        $('#director').css('border-color', 'green');
        $('#director').css('background-color', '#9afea9a1');
    }

        if (!guion) {
        event.preventDefault(); 
        errorMessage = 'El guion es obligatorio.';
        $('#error-message-guion').text(errorMessage);
        $('#guion').css('border-color', 'red');
        $('#guion').css('background-color', '#ffaaaaa1');
    }else if (!soloLetras.test(titulo)) {
        $('#error-message-titulo').text('El título solo puede contener letras.');
    }else {
        $('#error-message-guion').text('');
        $('#guion').css('border-color', 'green');
        $('#guion').css('background-color', '#9afea9a1');
    }

        if (!produccion) {
        event.preventDefault(); 
        errorMessage = 'La producción es obligatoria.';
        $('#error-message-produccion').text(errorMessage);
        $('#produccion').css('border-color', 'red');
        $('#produccion').css('background-color', '#ffaaaaa1');
    }else {
        $('#error-message-produccion').text('');
        $('#produccion').css('border-color', 'green');
        $('#produccion').css('background-color', '#9afea9a1');
    }


        if (!anio) {
        event.preventDefault(); 
        errorMessage = 'El año es obligatorio.';
        $('#error-message-anio').text(errorMessage);
        $('#anio').css('border-color', 'red');
        $('#anio').css('background-color', '#ffaaaaa1');
    }else if((anio < 0) || (anio > 2025)){
        event.preventDefault(); 
        errorMessage = 'El año no existe';
        $('#error-message-anio').text(errorMessage);
    }else {
        $('#error-message-anio').text('');
        $('#anio').css('border-color', 'green');
        $('#anio').css('background-color', '#9afea9a1');
    }

        if (!nacionalidad) {
        event.preventDefault(); 
        errorMessage = 'La nacionalidad es obligatoria.';
        $('#error-message-nacionalidad').text(errorMessage);
        $('#nacionalidad').css('border-color', 'red');
        $('#nacionalidad').css('background-color', '#ffaaaaa1');
    }else if (!soloLetras.test(titulo)) {
        $('#error-message-nacionalidad').text('El título solo puede contener letras.');
    }else {
        $('#error-message-nacionalidad').text('');
        $('#nacionalidad').css('border-color', 'green');
        $('#nacionalidad').css('background-color', '#9afea9a1');
    }

        if (!genero) {
        event.preventDefault(); 
        errorMessage = 'El genero es obligatorio.';
        $('#error-message-genero').text(errorMessage);
        $('#genero').css('border-color', 'red');
    }else {
        $('#error-message-genero').text('');
        $('#genero').css('border-color', 'green');
        $('#genero').css('background-color', '#9afea9a1');
    }

        if (!duracion) {
        event.preventDefault(); 
        errorMessage = 'La duración es obligatoria.';
        $('#error-message-duracion').text(errorMessage);
        $('#duracion').css('border-color', 'red');
        $('#duracion').css('background-color', '#ffaaaaa1');
    }else if((duracion < 0) || (duracion > 300)){
        event.preventDefault(); 
        errorMessage = 'Error con la duración';
        $('#error-message-duracion').text(errorMessage);
    }else {
        $('#error-message-duracion').text('');
        $('#duracion').css('border-color', 'green');
        $('#duracion').css('background-color', '#9afea9a1');
    }

        if (!restriccion) {
        event.preventDefault(); 
        errorMessage = 'La restricción es obligatoria.';
        $('#error-message-restriccion').text(errorMessage);
    }else {
        $('#error-message-restriccion').text('');
    }

        if (!miArchivo) {
        event.preventDefault(); 
        errorMessage = 'El archivo es obligatorio.';
        $('#error-message-archivo').text(errorMessage);
    }else {
        $('#error-message-archivo').text('');
    }
});