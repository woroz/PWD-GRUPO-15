function validarOperacion() {
  let inputs = document.querySelectorAll("input[type='number']");
  
  // Validar edad
  for (let i = 0; i < inputs.length; i++) {
    let input = inputs[i]
    if (input.value.trim() === "" || isNaN(input.value)) {
      alert("Completa el campo de edad correctamente.")
      input.focus()
      return false
    }
  }
  return true // todo ok
}