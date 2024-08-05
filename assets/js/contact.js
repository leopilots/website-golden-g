(function() {
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevenir el envío del formulario

        // Obtener los valores del formulario
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;

        // Validación simple
        if (name && email && message) {
            document.getElementById('response-message').textContent = '¡Mensaje enviado con éxito!';
            document.getElementById('response-message').style.color = 'green';
            // Aquí puedes agregar la lógica para enviar el formulario, como una solicitud AJAX.
        } else {
            document.getElementById('response-message').textContent = 'Por favor, complete todos los campos.';
        }
    });
})();
