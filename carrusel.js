const pista = document.querySelector('.carru-pista');
const puntos = document.querySelectorAll('.punto');
const btnSig = document.querySelector('.siguiente');
const btnAnt = document.querySelector('.anterior');

let index = 0;
const slides = document.querySelectorAll('.carru-slide');
const totalSlides = slides.length;

function actualizarCarrusel() {
    pista.style.transform = `translateX(-${index * 100}%)`;
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

btnSig.addEventListener('click', () => {
    siguienteSlide();
    reiniciarIntervalo();
});

btnAnt.addEventListener('click', () => {
    anteriorSlide();
    reiniciarIntervalo();
});

puntos.forEach((punto, i) => {
    punto.addEventListener('click', () => {
        index = i;
        actualizarCarrusel();
        reiniciarIntervalo();
    });
});

let intervalo = setInterval(siguienteSlide, 4000);

function reiniciarIntervalo() {
    clearInterval(intervalo);
    intervalo = setInterval(siguienteSlide, 4000);
}

// --- LÓGICA DEL MODAL DE LOGIN ---
const modal = document.getElementById("modalLogin");
const btnAbrir = document.querySelector(".btn-login");
const btnCerrar = document.querySelector(".cerrar-modal");

// Abrir al hacer clic en 'login'
btnAbrir.addEventListener("click", (e) => {
    e.preventDefault(); // Evita que recargue la página
    modal.style.display = "block";
});

// Cerrar en la 'X'
btnCerrar.onclick = function() {
    modal.style.display = "none";
}

// Cerrar si hacen clic fuera de la ventana blanca
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}