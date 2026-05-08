<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identidad - Community College</title>
    <!-- v=1.9 para refrescar los cambios de centrado -->
    <link rel="stylesheet" href="estilo_testimonios.css?v=1.9">
</head>
<body class="pagina-privada">

<header>
    <div class="logo-area">
        <h1><a href="inicio_privado.php">COMMUNITY COLLAGE</a></h1>
        <p>OPORTUNIDADES DE ESTUDIO</p>
    </div>

    <nav class="nav-principal">
        <ul>
            <li><a href="inicio_privado.php">Ubicacion Y Contacto</a></li>
            <li><a href="requisitos.php">Requisitos</a></li>
            <li><a href="fotos_testimonios.php">Fotos y Testimonios</a></li>
            <li><a href="tramites.php">Trámites</a></li>
        </ul>
    </nav>

    <div class="usuario-area">
        <span class="icon-graduacion">🎓</span>
        <div class="auth-links">
            <a href="#" class="btn-login">Contáctanos</a>
        </div>
    </div>
</header>

<main class="contenedor-identidad">
    <div class="layout-identidad">
        
        <!-- Contenedor centrado entre la pared izquierda y la imagen -->
        <div class="lado-frases">
            <div class="envoltorio-maquina">
                <h2 id="maquina-escribir"></h2><span class="cursor">|</span>
            </div>
        </div>

        <div class="lado-credencial">
            <div class="contenedor-foto-identidad">
                <img src="imgs/identidad.jpeg" alt="Identidad" class="imagen-agrandar">
            </div>
        </div>

        <div class="lado-colores">
            <div class="cuadro-color color-marino"><div class="info-hover"><p>Azul Marino</p><span>#003366</span></div></div>
            <div class="cuadro-color color-dorado"><div class="info-hover"><p>Dorado</p><span>#d4af37</span></div></div>
            <div class="cuadro-color color-blanco"><div class="info-hover"><p>Blanco</p><span>#ffffff</span></div></div>
            <div class="cuadro-color color-oscuro"><div class="info-hover"><p>Azul Oscuro</p><span>#001a33</span></div></div>
        </div>

    </div>
</main>

<footer class="footer-redes">
    <div class="contenedor-footer-final">
        <div class="espaciador-footer"></div>
        <div class="contenido-footer-central">
            <p class="frase-community">"Forjando el camino hacia el éxito académico y profesional."</p>
            <div class="redes-sociales">
                <a href="#"><img src="imgs/iconoFcebook.avif" alt="Facebook"></a>
                <a href="#"><img src="imgs/iconoInstagram.webp" alt="Instagram"></a>
                <a href="#"><img src="imgs/iconoX.avif" alt="X"></a>
            </div>
            <p class="copy-footer">© 2026 Community College</p>
        </div>
        <div class="area-boton-identidad">
            <a href="identidad.php" class="btn-footer-identidad">Identidad ➔</a>
        </div>
    </div>
</footer>

<?php include 'modal.php'; ?>
<script src="modal.js"></script>

<script>
const textoElemento = document.getElementById('maquina-escribir');
const frases = [
    "Cree en ti mismo.",
    "El éxito es la suma de pequeños esfuerzos.",
    "Tu futuro empieza hoy.",
    "La disciplina vence al talento.",
    "No te detengas hasta estar orgulloso.",
    "Haz que suceda.",
    "La educación es tu pasaporte al mundo.",
    "Sueña en grande, trabaja duro.",
    "Cada paso cuenta.",
    "Tú eres capaz de cosas increíbles.",
    "Supera tus propios límites.",
    "El conocimiento es poder."
];

let fraseIndex = 0;
let charIndex = 0;
let borrando = false;

function animarTexto() {
    const fraseActual = frases[fraseIndex];
    
    if (borrando) {
        textoElemento.textContent = fraseActual.substring(0, charIndex - 1);
        charIndex--;
    } else {
        textoElemento.textContent = fraseActual.substring(0, charIndex + 1);
        charIndex++;
    }

    let velocidad = borrando ? 50 : 100;

    if (!borrando && charIndex === fraseActual.length) {
        velocidad = 2000;
        borrando = true;
    } else if (borrando && charIndex === 0) {
        borrando = false;
        fraseIndex = (fraseIndex + 1) % frases.length;
        velocidad = 500;
    }

    setTimeout(animarTexto, velocidad);
}

document.addEventListener('DOMContentLoaded', animarTexto);
</script>

</body>
</html>