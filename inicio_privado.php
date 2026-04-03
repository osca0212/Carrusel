<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Panel de Usuario</title>
    <link rel="stylesheet" href="estilo_privado.css">
</head>
<body class="pagina-privada">

    <header>
        <div class="logo-area">
            <h1>COMMUNITY COLLEGE</h1>
            <p>OPORTUNIDADES DE ESTUDIO</p>
        </div>
        <nav class="nav-principal">
            <ul>
                <li><a href="#" class="activo-link">Inicio</a></li>
                <li><a href="#">Requisitos</a></li>
                <li><a href="#">Fotos y Testimonios</a></li>
                <li><a href="#">Trámites</a></li>
            </ul>
        </nav>
        <div class="usuario-area">
            <span class="icon-graduacion">🎓</span>
            <div class="auth-links">
                <a href="index.html">Cerrar Sesión</a>
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
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.8997755366144!2d-106.37599492341!3d31.74825997416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75913a7b7b6b1%3A0x7f1c4b4b4b4b4b4b!2sEl%20Paso%20Community%20College%20Valle%20Verde%20Campus!5e0!3m2!1sen!2sus!4v1704067200000!5m2!1sen!2sus" 
                    width="100%" 
                    height="300" 
                    style="border:0; border-radius: 8px;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </main>

    <footer>
        <div class="contenedor-footer">
            <p class="frase-community">"Forjando el camino hacia el éxito académico y profesional."</p>
            <div class="redes-sociales">
                <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/facebook/facebook-original.svg" alt="FB"></a>
                <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linkedin/linkedin-original.svg" alt="LinkedIn"></a>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/5/57/X_logo_2023_original.svg" alt="X"></a>
            </div>
        </div>
    </footer>

</body>
</html>