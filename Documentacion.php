<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación - Community College</title>
    <link rel="stylesheet" href="estilo_requisitos.css">
    <!-- El script se movió al final para mayor eficiencia -->
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

<main class="contenedor-requisitos">
    <div class="lado-imagenes">
        <a href="idiomas_y_finanzas.php" class="tarjeta-mini">
            <img src="imgs/Requisito2.png" alt="Idiomas y Finanzas">
            <p>Idiomas y Finanzas</p>
        </a>
        <a href="requisitos.php" class="tarjeta-mini">
            <img src="imgs/Requisito3.png" alt="Requisitos Importantes">
            <p>Requisitos Importantes</p>
        </a>
    </div>

    <div class="tarjeta info-requisitos">
        <h2>Documentación Necesaria para Ingresar</h2>
        <p>Para estudiar en un Community College de Estados Unidos como estudiante internacional, es importante contar con la documentación básica solicitada por la institución.</p>
        <ul>
            <li><strong>Pasaporte vigente:</strong> Debe estar actualizado y válido durante toda tu estancia.</li>
            <li><strong>Acta de nacimiento:</strong> Algunas instituciones pueden solicitarla como identificación adicional.</li>
            <li><strong>Certificado de preparatoria:</strong> Historial académico o diploma de bachillerato terminado.</li>
            <li><strong>Traducción oficial:</strong> Si tus documentos están en español, pueden requerirse traducidos al inglés.</li>
            <li><strong>Formulario de admisión:</strong> Solicitud completada con datos personales y académicos.</li>
            <li><strong>Visa de estudiante (F-1):</strong> Necesaria para estudiar de manera presencial en Estados Unidos.</li>
            <li><strong>Fotografías recientes:</strong> Algunas escuelas solicitan fotos tipo pasaporte.</li>
        </ul>
        <p class="nota-final">Los documentos pueden variar según la institución, pero estos son los más comunes para estudiantes internacionales.</p>
    </div>
</main>

<footer class="footer-redes">
    <div class="contenedor-footer-final">
        <!-- Columna izquierda vacía para balancear -->
        <div class="espaciador-footer"></div>

        <!-- Columna central: Redes Sociales -->
        <div class="contenido-footer-central">
            <p class="frase-community">"Forjando el camino hacia el éxito académico y profesional."</p>
            <div class="redes-sociales">
                <a href="#"><img src="imgs/iconoFcebook.avif" alt="Facebook"></a>
                <a href="#"><img src="imgs/iconoInstagram.webp" alt="Instagram"></a>
                <a href="#"><img src="imgs/iconoX.avif" alt="X"></a>
            </div>
            <p class="copy-footer">© 2026 Community College</p>
        </div>

        <!-- Columna derecha: El Botón de Identidad -->
        <div class="area-boton-identidad">
            <a href="identidad.php" class="btn-footer-identidad">Identidad ➔</a>
        </div>
    </div>
</footer>

<?php include 'modal.php'; ?>
<script src="modal.js"></script>
</body>
</html>