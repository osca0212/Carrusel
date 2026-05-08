<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos y Testimonios - Community College</title>
    <link rel="stylesheet" href="estilo_testimonios.css">
</head>
<body class="pagina-privada">
<header>
    <div class="logo-area">
        <h1><a href="index.html">COMMUNITY COLLAGE</a></h1>
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
<main class="contenedor-testimonios">
    <div class="lado-alumnos">
        <div class="tarjeta-alumno" data-index="0"><img src="imgs/alumno1.jpg"></div>
        <div class="tarjeta-alumno" data-index="1"><img src="imgs/alumno2.jpg"></div>
        <div class="tarjeta-alumno" data-index="2"><img src="imgs/alumno3.jpg"></div>
        <div class="tarjeta-alumno" data-index="3"><img src="imgs/alumno4.jpg"></div>
    </div>
    <div class="contenido-alumno">
        <img id="imagen-grande" src="imgs/alumno1.jpg" class="imagen-grande">
        <div class="info-alumno" id="info-alumno">
            <h3>Sofía Méndez</h3>
            <p><strong>Universidad:</strong> EPCC</p>
            <p><strong>Carrera:</strong> Administración de Empresas</p>
            <p><strong>Tiempo:</strong> 2 años</p>
            <p class="testimonio">Recibir apoyo constante de mis profesores me motivó a dar lo mejor de mí en cada proyecto académico.</p>
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
<script src="testimonios.js"></script>
<?php include 'modal.php'; ?>
<script src="modal.js"></script>
</body>
</html>