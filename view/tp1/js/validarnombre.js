function validarnombre() {
    const inputs = document.querySelectorAll("input");
    var resp = true;
    for (const input of inputs) {
        if (input.type === "submit") continue;


        if (input.value.trim() === "") {
            alert(`El campo "${input.name}" debe completarse`);
            input.focus();
            resp = false; 
        }

        if (input.name === "edad" && (isNaN(input.value) || input.value <= 0)) {
            alert("Ingrese una edad válida.");
            input.focus();
            resp = false; 
        }
    }
    return resp; 
}
