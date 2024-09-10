const contactForm = document.querySelector('form');
contactForm.addEventListener('submit', function (event) {
    event.preventDefault();
    alert('El formulario se a guardado correctamente');
});