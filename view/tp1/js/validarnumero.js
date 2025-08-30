function validarNumero () {
     var resp = true;
     var mydato = document.getElementById("numero").value;
     if (mydato == "") {
        alert ("Ingrese un numero")
        resp = false
     }
     return resp
}
