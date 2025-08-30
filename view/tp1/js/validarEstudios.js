function validarEstudios() {
    var resp = true;
    let inputs = document.querySelectorAll("input[type='number']");
    const estudios = document.querySelector('input[name="estudios"]:checked');
    const sexo = document.querySelector('input[name="sexo"]:checked');

  if (!estudios || !sexo) {
    alert("Debe seleccionar una opcion para estudios y sexo.");
    resp = false;
  }
  for (let i = 0; i < inputs.length; i++) {
    let input = inputs[i];
    if (input.value.trim() === "" || isNaN(input.value)) {
      alert("Completa el campo.");
      input.focus();
      resp = false;
    }
  }
  return resp;
}