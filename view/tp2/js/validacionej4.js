$(document).ready(function() {
    $("#formcine").validate({
        rules: {
            titulo: { required: true },
            director: { required: true },
            actores: { required: true },
            guion: { required: true },
            produccion: { required: true },
            anio: { 
                required: true, 
                digits: true,
                min: 1888,
                max: new Date().getFullYear()
            },
            nacionalidad: { required: true },
            duracion: { required: true },
            genero : { required: true },
            sinopsis: { required: true },
            restricciones: { required: true }
        },
        messages: {
            titulo: { required: "Debe ingresar el título" },
            director: { required: "Debe ingresar el director" },
            actores: { required: "Debe ingresar los actores" },
            guion: { required: "Debe ingresar el guión" },
            produccion: { required: "Debe ingresar la producción" },
            anio: { 
                required: "Debe ingresar el año",
                digits: "Debe ser un número válido",
                min: "El año es demasiado antiguo",
                max: "El año no puede ser mayor al actual"
            },
            nacionalidad: { required: "Debe ingresar la nacionalidad" },
            duracion: { required: "Debe ingresar la duración" },
            genero: { required: "Debe seleccionar un genero" },
            sinopsis: { required: "Debe ingresar la sinopsis" },
            restricciones: { required: "Debe seleccionar una restricción de edad" }
        },
        errorClass: "error"
    });
});