const nav = document.querySelector(".menu");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");
const burguer = document.querySelector("#burguer");
const x = document.querySelector("#x");
;

abrir.addEventListener("click", () => {
    if(nav.classList.contains("visible")){
        nav.classList.remove("visible");
        burguer.style.display ="block";
        x.style.display ="none";
    }
    else{
        nav.classList.add("visible");
        burguer.style.display ="none";
        x.style.display ="block";
    }
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})

function validarNewsletter() {
    var suscriptor = document.forms["newsletter"]["subscriptor"].value;

    if (suscriptor == "") {
        alert("Campo vacio. Por favor, Ingresa tu dirección de correo electronico");
        return false; // Evita que el formulario se envíe
    }

    // Puedes agregar más validaciones según tus necesidades

    return true; // Permite que el formulario se envíe
}

// chatbot


function mostrarMensaje(mensaje) {
    const chatOutput = document.getElementById("chat-output");
    chatOutput.innerHTML += `<p>${mensaje}</p>`;
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
        mostrarMensaje("Chatbot: Para hacer el prestamo de un libro primero debes estar inicar sesion. escoger el libro que quiera pedir, seleccionar PRESTAMO y posteriormnete te direccionaremos a la pagina del libro, debs seleccioanr tu sede para ver la disponibildiad y finalmnente precionar PRESTAR.  ");
        break;
      case "2":
        mostrarMensaje("Chatbot: Si no entregas el libro en el plazo indicado, procederemos a sancionarte generando una multa de $100 pesos por los dias que trasncurran.");
        break;
      case "3":
        mostrarMensaje("Chatbot: Para pagar la multa primero debes iniciar sesion y dirgirte al aparatdo de PRESTAMOS, dirigirte a sanciones y presionar PAGAR, seras redirigido a la pagian de Webpay donde puedas pegar con el metodo mas conveniente. ");
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
    // Iniciar el chatbot
    chatbot();
  }


