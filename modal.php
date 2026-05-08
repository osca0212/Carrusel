<!-- MODAL OPCIONES -->
<div id="modalOpciones" class="modal">
    <div class="contenido-modal">
        <span class="cerrar-modal">&times;</span>
        <h2>Bienvenido</h2>
        <button id="btnIrLogin" class="btn-enviar">Iniciar Sesión</button>
        <button id="btnIrRegistro" class="btn-enviar">Registrarse</button>
    </div>
</div>

<!-- MODAL LOGIN -->
<div id="modalLogin" class="modal">
    <div class="contenido-modal">
        <span class="cerrar-modal">&times;</span>
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="POST">
            <div class="campo">
                <label>Email:</label>
                <input type="text" name="usuario" required>
            </div>
            <div class="campo">
                <label>Contraseña:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn-enviar">Entrar</button>
        </form>
    </div>
</div>

<!-- MODAL REGISTRO -->
<div id="modalRegistro" class="modal">
    <div class="contenido-modal">
        <span class="cerrar-modal">&times;</span>
        <h2>Registrarse</h2>
        <form action="registro.php" method="POST">
            <div class="campo">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="campo">
                <label>Contraseña:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn-enviar">Registrarse</button>
        </form>
    </div>
</div>