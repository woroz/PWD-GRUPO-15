function validarHoras() {
    const inputs = document.querySelectorAll("input[type='number']");
    var resp = true;
    for (const input of inputs) {
        if (input.value === "" || isNaN(input.value)) {
            alert(`El campo "${input.name}" debe completarse con un número.`);
            input.focus();
            resp = false; 
        }
    }

    return resp; 
}
