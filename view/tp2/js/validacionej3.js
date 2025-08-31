$(document).ready(function() {
    $("#formLogin").validate({
        rules: {
            user: { required: true },
            password: {
                required: true, 
                minlength: 8,
                diffUser: true,
                checkpass: true
            }
        },
        messages: {
            user: { required: "Debe ingresar su usuario" },
            password: {
                required: "Debe ingresar su contraseña",
                minlength: "La contraseña debe tener al menos 8 caracteres",
                diffUser: "La contraseña no puede ser igual al usuario",
                checkpass: "Debe contener letras y números"
            }
        },
    });
});

$.validator.addMethod("diffUser", function(value, element) {
    return value !== $("#user").val();
}, "La contraseña no puede ser igual al usuario");

$.validator.addMethod("checkpass", function(value) {
    return /[A-Za-z]/.test(value) && /\d/.test(value);
}, "La contraseña debe contener letras y números");