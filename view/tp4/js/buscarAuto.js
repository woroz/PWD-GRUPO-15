function validar () {
     var resp = true;
     var patente = document.getElementById("patente").value;
     if (patente == "") {
        alert ("Ingrese una patente")
        resp = false
     }
     return resp
}