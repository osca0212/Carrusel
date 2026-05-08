/**
 * CARRUSEL Y SISTEMA DE MODALES UNIFICADO
 * Community Collage - 2026
 */

// --- CONFIGURACIÓN DEL CARRUSEL ---
const pista = document.querySelector('.carru-pista');
const puntos = document.querySelectorAll('.punto');
const btnSig = document.querySelector('.siguiente');
const btnAnt = document.querySelector('.anterior');
const slides = document.querySelectorAll('.carru-slide');

let index = 0;
const totalSlides = slides.length;

function actualizarCarrusel() {
    if (!pista) return;
    // Mueve la pista horizontalmente según el índice
    pista.style.transform = `translateX(-${index * 100}%)`;
    
    // Actualiza los puntos indicadores
    puntos.forEach((p, i) => {
        p.classList.toggle('activo', i === index);
    });
}

function siguienteSlide() {
    index = (index + 1) % totalSlides;
    actualizarCarrusel();
}

function anteriorSlide() {
    index = (index - 1 + totalSlides) % totalSlides;
    actualizarCarrusel();
}

// Eventos de control manual
if (btnSig) {
    btnSig.addEventListener('click', () => { 
        siguienteSlide(); 
        reiniciarIntervalo(); 
    });
}

if (btnAnt) {
    btnAnt.addEventListener('click', () => { 
        anteriorSlide(); 
        reiniciarIntervalo(); 
    });
}

// Eventos para los puntos (indicadores)
puntos.forEach((punto, i) => {
    punto.addEventListener('click', () => {
        index = i;
        actualizarCarrusel();
        reiniciarIntervalo();
    });
});

// Movimiento automático cada 4 segundos
let intervalo = setInterval(siguienteSlide, 4000);

function reiniciarIntervalo() {
    clearInterval(intervalo);
    intervalo = setInterval(siguienteSlide, 4000);
}


// --- CONFIGURACIÓN DE MODALES (LOGIN / REGISTRO) ---
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

// Cerrar modales al hacer clic fuera del recuadro blanco
window.addEventListener("click", (e) => {
    if (e.target.classList.contains("modal")) {
        modalOpciones.style.display = "none";
        modalLogin.style.display = "none";
        modalRegistro.style.display = "none";
    }
});