$(document).ready(function () {
    $("#form8").validate({
        rules: {
          edad: {
            required: true,
            number: true,
            min: 0,
            max: 110
          },
          estudiante: {
            required: true
          }
        },
        messages: {
          edad: {
            required: "Ingresa tu edad",
            number: "Solo se permiten números",
            min: "La edad no puede ser negativa",
            max: "Ingresa una edad valida"
          },
          estudiante: {
            required: "Selecciona si eres estudiante"
          }
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "estudiante") {
                error.appendTo(".grupo-radio");
            }else{
                error.insertAfter(element);
            }
        }
    })
})
