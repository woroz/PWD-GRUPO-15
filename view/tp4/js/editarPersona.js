document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('formBuscarPersona');
  if (!form) return;

  const dni = document.getElementById('dni');
  const err = document.getElementById('error-message-dni');

  form.addEventListener('submit', function (e) {
    err.textContent = '';
    dni.classList.remove('error');

    let invalid = false;
    const v = (dni.value || '').trim();

    if (!v) {
      err.textContent = 'El DNI es obligatorio.';
      dni.classList.add('error');
      invalid = true;
    } else if (!/^\d+$/.test(v)) {
      err.textContent = 'El DNI debe contener solo números (sin puntos).';
      dni.classList.add('error');
      invalid = true;
    }

    if (invalid) e.preventDefault();
  });
});
