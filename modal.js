/**
 * LÓGICA DE MODALES (LOGIN / REGISTRO / OPCIONES)
 * Se debe incluir en todas las páginas que tengan el botón "Contáctanos"
 */

const modalOpciones = document.getElementById("modalOpciones");
const modalLogin = document.getElementById("modalLogin");
const modalRegistro = document.getElementById("modalRegistro");

const btnAbrir = document.querySelector(".btn-login");
const btnIrLogin = document.getElementById("btnIrLogin");
const btnIrRegistro = document.getElementById("btnIrRegistro");

// Abrir el modal de opciones inicial
if (btnAbrir) {
    btnAbrir.addEventListener("click", (e) => {
        e.preventDefault();
        modalOpciones.style.display = "flex";
    });
}

// Cambiar de opciones a Login
if (btnIrLogin) {
    btnIrLogin.addEventListener("click", () => {
        modalOpciones.style.display = "none";
        modalLogin.style.display = "flex";
    });
}

// Cambiar de opciones a Registro
if (btnIrRegistro) {
    btnIrRegistro.addEventListener("click", () => {
        modalOpciones.style.display = "none";
        modalRegistro.style.display = "flex";
    });
}

// Cerrar cualquier modal al presionar la 'X'
document.querySelectorAll(".cerrar-modal").forEach(btn => {
    btn.addEventListener("click", () => {
        modalOpciones.style.display = "none";
        modalLogin.style.display = "none";
        modalRegistro.style.display = "none";
    });
});

// Cerrar modales al hacer clic fuera del recuadro
window.addEventListener("click", (e) => {
    if (e.target.classList.contains("modal")) {
        modalOpciones.style.display = "none";
        modalLogin.style.display = "none";
        modalRegistro.style.display = "none";
    }
});