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
