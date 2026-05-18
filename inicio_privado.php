<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Panel de Usuario</title>
    <link rel="stylesheet" href="estilo_privado.css?v=1.4">
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
        <!-- COLUMNA IZQUIERDA: Imagen + Tarjeta Info -->
        <div class="columna">
            <div class="tarjeta">
                <img src="imgs/Community3.jpg" alt="El Paso Community College" class="img-uni">
                <p class="pie-foto">El Paso Community College - Campus Principal</p>
            </div>
            <div class="tarjeta info-texto">
                <h3>Información General</h3>
                <p>El Paso Community College (EPCC) es una institución de educación superior que ofrece programas académicos de alta calidad, capacitación técnica y oportunidades de transferencia universitaria.</p>
                <p style="margin-top: 10px;">Con más de 30,000 estudiantes, EPCC es uno de los colegios comunitarios más grandes de Texas, brindando educación accesible y de excelencia.</p>
            </div>
        </div>

        <!-- COLUMNA DERECHA: Dirección + Mapa -->
        <div class="columna">
            <div class="tarjeta soporte">
                <h3>📍 Ubicación y Contacto</h3>
                <div class="info-contacto">
                    <p><strong>El Paso Community College</strong></p>
                    <p><strong>Valle Verde Campus (Principal)</strong></p>
                    <p>919 Hunter Dr, El Paso, TX 79915, USA</p>
                    <br>
                    <p><strong>📞 Teléfono:</strong> (915) 831-2000</p>
                    <p><strong>🌐 Web:</strong> <a href="https://www.epcc.edu" target="_blank">www.epcc.edu</a></p>
                    <p><strong>⏰ Horario:</strong> Lunes a Viernes, 8:00 AM - 5:00 PM</p>
                </div>
            </div>
            
            <div class="tarjeta mapa-contenedor">
                <h4>Ubicación en el Mapa</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.67130069071!2d-106.37237152377757!3d31.752171835652135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75b180ef2a71b%3A0xb37b3b304c954479!2sEl%20Paso%20Community%20College%20-%20Valle%20Verde%20Campus!5e0!3m2!1ses-419!2smx!4v1778688156060!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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