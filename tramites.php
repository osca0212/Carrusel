<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trámites - Community College</title>
    <link rel="stylesheet" href="tramites.css">
    <script src="modal.js"></script>
</head>

<body class="pagina-privada">

<header>
    <div class="logo-area">
        <!-- Se mantiene COLLAGE por consistencia con tu proyecto -->
        <h1><a href="index.html">COMMUNITY COLLAGE</a></h1>
        <p>OPORTUNIDADES DE ESTUDIO</p>
    </div>

    <nav class="nav-principal">
        <ul>
            <li><a href="inicio_privado.php">Ubicacion Y Contacto</a></li>
            <li><a href="requisitos.php">Requisitos</a></li>
            <li><a href="fotos_testimonios.php">Fotos y Testimonios</a></li>
            <li><a href="#" class="activo-link">Trámites</a></li>
        </ul>
    </nav>

    <div class="usuario-area">
        <span class="icon-graduacion">🎓</span>
        <div class="auth-links">
            <a href="#" class="btn-login">Contáctanos</a>
        </div>
    </div>
</header>

<main class="contenedor-tramites">

    <!-- LADO IZQUIERDO -->
    <div class="lado-seleccion-paises">
        <div class="btn-pais" data-pais="mexico">México 🇲🇽</div>
        <div class="btn-pais" data-pais="china">China 🇨🇳</div>
        <div class="btn-pais" data-pais="vietnam">Vietnam 🇻🇳</div>
        <div class="btn-pais" data-pais="brasil">Brasil 🇧🇷</div>
    </div>

    <!-- LADO DERECHO -->
    <div class="visor-info-tramites">
        <div id="contenido-dinamico">
            <h2>Guía de Trámites por País</h2>
            <p>Selecciona un país para conocer los pasos específicos según tu nacionalidad.</p>
            <div class="icono-centro">🌍</div>
        </div>
    </div>

</main>

<footer class="footer-redes">

    <div class="contenedor-footer">

        <p class="frase-community">
            "Forjando el camino hacia el éxito académico y profesional."
        </p>

        <h4>Síguenos en redes sociales</h4>

        <div class="redes-sociales">

            <a href="https://www.facebook.com/epccnews/#" target="_blank">
                <img src="imgs/iconoFcebook.avif" alt="Facebook">
            </a>

            <a href="https://www.instagram.com/epccnews" target="_blank">
                <img src="imgs/iconoInstagram.webp" alt="Instagram">
            </a>

            <a href="https://x.com/EPCCNews" target="_blank">
                <img src="imgs/iconoX.avif" alt="X">
            </a>

        </div>

        <p class="copy-footer">© 2026 Community College</p>

    </div>

</footer>

<?php include 'modales.php'; ?>

<script src="tramites.js"></script>

</body>
</html>