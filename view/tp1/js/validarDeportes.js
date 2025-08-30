function validarDeportes() {
    let inputs = document.querySelectorAll("input[type='number']");
    var resp = true;
  for (let i = 0; i < inputs.length; i++) {
    let input = inputs[i];
    if (input.value.trim() === "" || isNaN(input.value)) {
      alert("Completa el campo de edad correctamente.");
      input.focus();
      resp = false;
    }
  }

  const deportes = document.querySelectorAll('input[name="deporte[]"]:checked');
  if (deportes.length === 0) {
    alert("Seleccione al menos un deporte.");
    resp = false;
  }

  return resp; 
}