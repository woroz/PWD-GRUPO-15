$(document).ready(function () {
    $("#form7").validate({
    rules: {
        operando1: {
            required: true,
            number: true
            },
        operando2: {
            required: true,
            number: true
        },
        select: {
            required: true
        }
    },
    messages: {
        operando1: {
            required: "Ingrese un numero",
            number: "Ingrese un numero(si es decimal usar punto ej:3.3)"
        },
        operando2: {
            required: "Ingrese un numero",
            number: "Ingrese un numero"
        },
        select: {
            required: "Seleccione una operacion"
        }
    }
    })
})