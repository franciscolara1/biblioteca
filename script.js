/*function enviarMensaje() {
    var mensaje = document.getElementById('mensaje').value;

    // Agregar el mensaje del usuario al historial del chat
    agregarMensaje('Tú', mensaje);

    // Procesar el mensaje del usuario
    procesarMensaje(mensaje);

    // Limpiar el campo de entrada
    document.getElementById('mensaje').value = '';
}

function procesarMensaje(mensaje) {
    // Lógica del chatbot (puedes personalizar según tus necesidades)
    var respuesta = 'Lo siento, no entiendo tu mensaje.';

    if (mensaje.toLowerCase().includes('hola')) {
        respuesta = '¡Hola! ¿En qué puedo ayudarte?';
    } else if (mensaje.toLowerCase().includes('cómo estás')) {
        respuesta = 'Estoy bien, gracias por preguntar.';
    }

    // Agregar la respuesta del chatbot al historial del chat
    agregarMensaje('Chatbot', respuesta);
}

function agregarMensaje(usuario, mensaje) {
    var chatBody = document.getElementById('chat-body');
    var nuevoMensaje = document.createElement('div');
    nuevoMensaje.innerHTML = '<strong>' + usuario + ':</strong> ' + mensaje;
    chatBody.appendChild(nuevoMensaje);

    // Desplazar la vista hacia abajo para mostrar el último mensaje
    chatBody.scrollTop = chatBody.scrollHeight;
}

*/