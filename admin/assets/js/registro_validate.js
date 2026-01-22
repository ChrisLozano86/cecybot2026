
//Validate form
document.getElementById('registro_form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir envío si hay errores
    let valid = true;

    // Limpiar mensajes de error previos
    document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

    // Validar campos requeridos
    const camposRequeridos = ['nombre_equipo', 'integrante1', 'categoria', 'institucionSeleccionada', 'email', 'tel'];
    camposRequeridos.forEach(id => {
      const campo = document.getElementById(id);
      if (!campo.value.trim()) {
        document.getElementById(`error-${id}`).textContent = 'Este campo es obligatorio.';
        valid = false;
      }
    });

    // Validar email
    const email = document.getElementById('email');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email.value.trim() && !emailRegex.test(email.value.trim())) {
      document.getElementById('error-email').textContent = 'Ingresa un correo electrónico válido.';
      valid = false;
    }


    // Validar logo
    const fileInput = document.getElementById('url_img');
    if (fileInput.files.length === 0) {
      valid = true;
    } else {
      const file = fileInput.files[0];
      const allowedExtensions = ['image/jpeg', 'image/png', 'image/jpg'];
      const maxSize = 5 * 1024 * 1024; // 5 MB

      if (!allowedExtensions.includes(file.type)) {
        document.getElementById('error-url_img').textContent = 'El archivo debe ser una imagen en formato JPG, JPEG o PNG.';
        valid = false;
      }

      if (file.size > maxSize) {
        document.getElementById('error-url_pago').textContent = 'El archivo debe pesar menos de 5 MB.';
        valid = false;
      }
    }

   

    // Validar archivo
const fileInput2 = document.getElementById('url_pago');
if (fileInput2.files.length === 0) {
  document.getElementById('error-url_pago').textContent = 'Debes subir un archivo.';
  valid = false;
} else {
  const file = fileInput2.files[0];
  const allowedExtensions = ['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'];
  const maxSize = 5 * 1024 * 1024; // 5 MB

  if (!allowedExtensions.includes(file.type)) {
    document.getElementById('error-url_pago').textContent = 'El archivo debe ser una imagen (JPG, JPEG, PNG) o un PDF.';
    valid = false;
  }

  if (file.size > maxSize) {
    document.getElementById('error-url_pago').textContent = 'El archivo debe pesar menos de 5 MB.';
    valid = false;
  }
}
    // Si todo es válido, enviar formulario
    if (valid) {
      this.submit();
      const loader = document.getElementById('loader');
      loader.style.visibility = 'visible';
    }
  });
