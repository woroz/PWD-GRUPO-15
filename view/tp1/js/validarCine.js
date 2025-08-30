function validarCine() {
    var resp = true;
    const edadInput = document.getElementById("edad").value.trim();
    const estudianteSelect = document.getElementById("estudiante").value;

    if (edadInput === "") {
        alert("Por favor, ingrese su edad.");
        resp = false;
    }

    const edad = Number(edadInput);
    if (isNaN(edad) || edad < 0) {
        alert("Ingrese un número válido para la edad.");
        resp = false;
    }

    if (estudianteSelect !== "si" && estudianteSelect !== "no") {
        alert("Seleccione si es estudiante o no.");
        resp = false;
    }

    return resp;
}
