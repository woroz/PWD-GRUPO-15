$.validator.addMethod("soloLetras", function(value) {
    return /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/.test(value);
})
$(document).ready(function () {
    $("#form3").validate({
    rules: {
        nombre: {
            required: true,
            soloLetras: true
        },
        apellido: {
            required: true,
            soloLetras: true
        },
        edad: {
            required: true,
            number: true,
            min: 1,
            max: 110
        },
        direccion: {
            required: true
        },
        estudio: {
            required: true
        },
        sexo: {
            required: true
        },
        "deporte[]": {
            required: true
        }
    },
    messages: {
        nombre: {
            required: "Ingrese Nombre",
            soloLetras: "Solo letras"
        },
        apellido: {
            required: "Ingrese apellido",
            soloLetras: "Solo letras"
        },
            edad: {
            required: "Ingrese edad",
            number: "Ingrese un numero",
            min: "Ingrese una edad valida",
            max: "Ingrese una edad valida"
        },
        direccion: {
            required: "Ingrese direccion"
        },
        estudio: {
            required: "Ingrese estudio"
        },
        sexo: {
            required: "Ingrese sexo"
        },
        "deporte[]": {
            required: "Seleccione al menos un deporte"
        },
    },
    errorPlacement: function(error, element) {
        if (element.attr("name") == "deporte[]") {
            error.appendTo("#deportes"); 
        }else if(element.attr("name") == "estudio"){
            error.appendTo("#estudios");
        }else if(element.attr("name") == "sexo"){
            error.appendTo("#sexos");
        }else {
            error.insertAfter(element);
        }
    }
    })
})