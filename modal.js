const modalOpciones = document.getElementById("modalOpciones");
const modalLogin = document.getElementById("modalLogin");
const modalRegistro = document.getElementById("modalRegistro");

// Soporta ambas clases para mayor compatibilidad
const btnAbrir = document.querySelector(".btn-login, .btn-contacto");
const btnIrLogin = document.getElementById("btnIrLogin");
const btnIrRegistro = document.getElementById("btnIrRegistro");

if (btnAbrir) {
    btnAbrir.addEventListener("click", (e) => {
        e.preventDefault();
        modalOpciones.style.display = "flex";
    });
}

if (btnIrLogin) {
    btnIrLogin.addEventListener("click", () => {
        modalOpciones.style.display = "none";
        modalLogin.style.display = "flex";
    });
}

if (btnIrRegistro) {
    btnIrRegistro.addEventListener("click", () => {
        modalOpciones.style.display = "none";
        modalRegistro.style.display = "flex";
    });
}

document.querySelectorAll(".cerrar-modal").forEach(btn => {
    btn.addEventListener("click", () => {
        modalOpciones.style.display = "none";
        modalLogin.style.display = "none";
        modalRegistro.style.display = "none";
    });
});

window.addEventListener("click", (e) => {
    if (e.target.classList.contains("modal")) {
        modalOpciones.style.display = "none";
        modalLogin.style.display = "none";
        modalRegistro.style.display = "none";
    }
});