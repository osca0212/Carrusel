<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Panel de Usuario</title>
    <link rel="stylesheet" href="estilo_privado.css?v=1.3">
</head>
<body class="pagina-privada">
<header>
    <div class="logo-area">
        <h1><a href="index.html">COMMUNITY COLLAGE</a></h1>
        <p>OPORTUNIDADES DE ESTUDIO</p>
    </div>
    <nav class="nav-principal">
        <ul>
            <li><a href="inicio_privado.php" class="activo-link">Ubicacion Y Contacto</a></li>
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
<main class="contenedor-maquetado">
    <div class="columna">
        <div class="tarjeta"><img src="imgs/Community3.jpg" alt="EPCC" class="img-uni"><p class="pie-foto">EPCC - Campus Principal</p></div>
        <div class="tarjeta info-texto"><h3>Información General</h3><p>EPCC ofrece alta calidad, capacitación técnica y transferencia universitaria a más de 30,000 estudiantes.</p></div>
    </div>
    <div class="columna">
        <div class="tarjeta soporte"><h3>📍 Ubicación y Contacto</h3><div class="info-contacto"><p>Valle Verde Campus: 919 Hunter Dr, El Paso, TX 79915</p><p>📞 (915) 831-2000</p></div></div>
        <div class="tarjeta mapa-contenedor"><h4>Mapa</h4><iframe src="https://www.google.com/maps/embed?..." width="100%" height="300" style="border:0; border-radius: 8px;" loading="lazy"></iframe></div>
    </div>
</main>
<footer class="footer-redes">
    <div class="contenedor-footer-final">
        <div class="espaciador-footer"></div>
        <div class="contenido-footer-central">
            <p class="frase-community">"Forjando el camino hacia el éxito académico y profesional."</p>
            <h4>Síguenos en redes sociales</h4>
            <div class="redes-sociales">
                <a href="https://www.facebook.com/epccnews/#" target="_blank"><img src="imgs/iconoFcebook.avif" alt="Facebook"></a>
                <a href="https://www.instagram.com/epccnews" target="_blank"><img src="imgs/iconoInstagram.webp" alt="Instagram"></a>
                <a href="https://x.com/EPCCNews" target="_blank"><img src="imgs/iconoX.avif" alt="X"></a>
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
</body>
</html>