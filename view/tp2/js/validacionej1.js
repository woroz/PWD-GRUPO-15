$(document).ready(function () {
    $("#form1").validate({
        rules: {
            numero: {
                required: true, digits: true
            }
        },
        messages: {
            numero: {
                required: "Ingrese un numero",
                digits: "Debe ser un número válido"
            }
        }
    })
})
