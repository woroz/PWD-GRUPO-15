document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('formSolicitarDatos');
  if (!form) return;

  const nombre   = document.getElementById('nombre');
  const apellido = document.getElementById('apellido');
  const domicilio= document.getElementById('domicilio');

  const errNom   = document.getElementById('error-nombre');
  const errApe   = document.getElementById('error-apellido');
  const errDom   = document.getElementById('error-domicilio');

  const soloLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

  form.addEventListener('submit', function (e) {
    [errNom, errApe, errDom].forEach(el => el.textContent = '');
    [nombre, apellido, domicilio].forEach(el => el.classList.remove('error'));

    let invalid = false;

    const vNom = (nombre.value || '').trim();
    if (!vNom) {
      errNom.textContent = 'El nombre es obligatorio.';
      nombre.classList.add('error'); invalid = true;
    } else if (!soloLetras.test(vNom)) {
      errNom.textContent = 'El nombre solo puede tener letras y espacios.';
      nombre.classList.add('error'); invalid = true;
    }

    const vApe = (apellido.value || '').trim();
    if (!vApe) {
      errApe.textContent = 'El apellido es obligatorio.';
      apellido.classList.add('error'); invalid = true;
    } else if (!soloLetras.test(vApe)) {
      errApe.textContent = 'El apellido solo puede tener letras y espacios.';
      apellido.classList.add('error'); invalid = true;
    }

    const vDom = (domicilio.value || '').trim();
    if (!vDom) {
      errDom.textContent = 'El domicilio es obligatorio.';
      domicilio.classList.add('error'); invalid = true;
    }

    if (invalid) e.preventDefault();
  });
});
