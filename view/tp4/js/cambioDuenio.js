document.addEventListener('DOMContentLoaded', function () {
    console.log('✅ cambioDueno.js cargado');
    const form    = document.getElementById('formCambioDueno');
    const patente = document.getElementById('patente');
    const dni     = document.getElementById('docNuevoDueno');

    const errPat  = document.getElementById('error-message-patente');
    const errDni  = document.getElementById('error-message-dni');

    form.addEventListener('submit', function (e) {
        errPat.textContent = '';
        errDni.textContent = '';
        patente.classList.remove('error');
        dni.classList.remove('error');

        let hayError = false;

        const vPat = patente.value.trim();
        if (!vPat) {
            errPat.textContent = 'La patente es obligatoria.';
            patente.classList.add('error');
            hayError = true;
        } else if (vPat.length < 6) {
            errPat.textContent = 'Debe tener al menos 6 caracteres.';
            patente.classList.add('error');
            hayError = true;
        }

        const vDni = dni.value.trim();
        if (!vDni) {
            errDni.textContent = 'El DNI del nuevo dueño es obligatorio.';
            dni.classList.add('error');
            hayError = true;
        } else if (!/^\d+$/.test(vDni)) {
            errDni.textContent = 'El DNI debe contener solo números.';
            dni.classList.add('error');
            hayError = true;
        }

        if (hayError) {
            e.preventDefault();
            console.log(' Formulario bloqueado por errores');
        } else {
            console.log(' Enviando formulario...');
        }
    });
});
