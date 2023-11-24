      function mostrarMensaje(mensaje) {
        const chatOutput = document.getElementById("chat-output");

        // Crear un nuevo elemento p para el mensaje
        const nuevoMensaje = document.createElement("p");
        nuevoMensaje.textContent = mensaje;

        // Agregar el nuevo mensaje al contenido del chat
        chatOutput.appendChild(nuevoMensaje);

        // Desplazar hacia abajo para que el nuevo mensaje sea visible
        nuevoMensaje.scrollIntoView();
                

        }


      function mostrarMenu() {
        mostrarMensaje("1. ¿Como hacer el prestamo de un libro?");
        mostrarMensaje("2. ¿Que pasa si no entrego el libro segun el plazo indicado?");
        mostrarMensaje("3. ¿Donde y como puedo pagar mi multa?");
        mostrarMensaje("4. ¿Donde puedo ver el horario de la biblioteca DUOC?");
        mostrarMensaje("5. Salir");
      }

      function chatbot() {
        mostrarMensaje("¡Bienvenido al chatbot Innovatin! favor seleccione una de las opciones para ayudarte:");
        mostrarMenu();
      }

      function enviarRespuesta() {
        const userInput = document.getElementById("user-input").value;
        mostrarMensaje(`Usuario: ${userInput}`);
        switch (userInput) {
          case "1":
            mostrarMensaje("Chatbot: Para hacer el prestamo de un libro primero debes estar inicar sesion. escoger el libro que quiera pedir, seleccionar PRESTAMO y posteriormente te direccionaremos a la pagina del libro, debs seleccioanr tu sede para ver la disponibildiad y finalmnente precionar PRESTAR.  ");
            break;
          case "2":
            mostrarMensaje("Chatbot: Si no entregas el libro en el plazo indicado, procederemos a sancionarte generando una multa de $100 pesos por los dias que trasncurran.");
            break;
          case "3":
            mostrarMensaje("Chatbot: Para pagar la multa primero debes iniciar sesion y dirgirte al aparatdo de PRESTAMOS, dirigirte a sanciones y presionar PAGAR, seras redirigido a la pagina de Webpay donde puedas pegar con el metodo mas conveniente. ");
            break;
          case "4":
            mostrarMensaje("Chatbot: Para ver el horario DUOC debes presionar el incono del reloj en la barra de navegacion.");
            break;
          case "5":
            mostrarMensaje("Chatbot: Saliendo del chatbot !Hasta luego¡");
            break;
          default:
            mostrarMensaje("Chatbot: Opción no válida. Por favor, elige una opción del 1 al 4.");
        }
        document.getElementById("user-input").value = "";
      }

      function iniciarChat() {
        // Mostrar el contenedor del chat al hacer clic en el botón
        document.getElementById("chat-container").style.display = "block";

        // Muestra el botón chat3 y el campo de entrada user-input
        document.getElementById("chat3").style.display = "inline-block";
        document.getElementById("user-input").style.display = "inline-block";

        // Oculta el botón chat2
        document.getElementById("chat2").style.display = "none";

        // Iniciar el chatbot
        chatbot();
      }

        // Limpiar chatbot

        function limpiarChat() {
            
            // Limpiar el contenido del chat-output al cerrar el chatbot
            document.getElementById("chat-output").innerHTML = "";

            // Ocultar el botón chat3 y el campo de entrada user-input
            document.getElementById("chat3").style.display = "none";
            document.getElementById("user-input").style.display = "none";

            // Mostrar el botón chat2
            document.getElementById("chat2").style.display = "flex";   
        }


      // Manejo de boton al realizar scroll

      
      const chatButton = document.getElementById("chatButton");
      const chatButtonOriginalBottom = chatButton.getBoundingClientRect().bottom;
      const minButtonBottom = 20; // Altura mínima desde la parte superior
      const maxButtonBottom = window.innerHeight - chatButton.clientHeight - 20; // Altura máxima desde la parte inferior

      window.addEventListener("scroll", () => {
        const scrollY = window.scrollY;

        // Calcula la nueva posición del botón en función del desplazamiento
        let newBottom = chatButtonOriginalBottom - scrollY;

        // Limita la posición mínima del botón
        newBottom = Math.max(minButtonBottom, newBottom);

        // Limita la posición máxima del botón
        newBottom = Math.min(maxButtonBottom, newBottom);

        // Asegúrate de que el botón no se desplace más arriba que la posición original
        chatButton.style.bottom = `${newBottom}px`;
    });