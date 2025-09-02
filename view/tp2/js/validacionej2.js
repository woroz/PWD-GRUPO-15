$(document).ready(function() {
    $("form[name='form2']").validate({
        rules: {
            lunes: { required: true, digits: true },
            martes: { required: true, digits: true },
            miercoles: { required: true, digits: true },
            jueves: { required: true, digits: true },
            viernes: { required: true, digits: true }
        },
        messages: {
            lunes: { 
                required: "Debe ingresar un valor para lunes",
                digits: "Debe ser un número válido"
            },
            martes: { 
                required: "Debe ingresar un valor para martes",
                digits: "Debe ser un número válido"
            },
            miercoles: { 
                required: "Debe ingresar un valor para miércoles",
                digits: "Debe ser un número válido"
            },
            jueves: { 
                required: "Debe ingresar un valor para jueves",
                digits: "Debe ser un número válido"
            },
            viernes: { 
                required: "Debe ingresar un valor para viernes",
                digits: "Debe ser un número válido"
            }
        },
        errorClass: "error"
    });
});
