<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trámites - Community College</title>
    <link rel="stylesheet" href="tramites.css?v=1.4">
</head>
<body class="pagina-privada">
<header>
    <div class="logo-area"><h1><a href="inicio_privado.php">COMMUNITY COLLAGE</a></h1><p>OPORTUNIDADES DE ESTUDIO</p></div>
    <nav class="nav-principal">
        <ul>
            <li><a href="inicio_privado.php">Ubicacion Y Contacto</a></li>
            <li><a href="requisitos.php">Requisitos</a></li>
            <li><a href="fotos_testimonios.php">Fotos y Testimonios</a></li>
            <li><a href="#" class="activo-link">Trámites</a></li>
        </ul>
    </nav>
    <div class="usuario-area"><span class="icon-graduacion">🎓</span><div class="auth-links"><a href="#" class="btn-login">Contáctanos</a></div></div>
</header>
<main class="contenedor-tramites">
    <div class="lado-seleccion-paises"><div class="btn-pais" data-pais="mexico">México 🇲🇽</div><div class="btn-pais" data-pais="china">China 🇨🇳</div><div class="btn-pais" data-pais="vietnam">Vietnam 🇻🇳</div><div class="btn-pais" data-pais="brasil">Brasil 🇧🇷</div></div>
    <div class="visor-info-tramites"><div id="contenido-dinamico"><h2>Guía de Trámites por País</h2><p>Selecciona un país.</p><div class="icono-centro">🌍</div></div></div>
</main>
<footer class="footer-redes">
    <div class="contenedor-footer-final">
        <div class="espaciador-footer"></div>
        <div class="contenido-footer-central">
            <p class="frase-community">"Forjando el camino hacia el éxito académico y profesional."</p>
            <h4>Síguenos en redes sociales</h4>
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
<script src="tramites.js"></script>
<?php include 'modal.php'; ?>
<script src="modal.js"></script>
</body>
</html>