<?php
// Datos de tu base de datos (según tu captura anterior)
$servername = "fdb1033.awardspace.net";
$username_db = "4745752_communitycollage";
$password_db = "Galleta01;)";
$dbname = "4745752_communitycollage";

// Conectar
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['usuario'];
    $pass = $_POST['password'];

    // Consulta simple (Más adelante usaremos password_hash por seguridad)
    // Buscamos al usuario en una tabla llamada 'usuarios'
    $sql = "SELECT * FROM usuarios WHERE email = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // LOGIN EXITOSO
        echo "<script>alert('¡Bienvenido!'); window.location.href='index.html';</script>";
    } else {
        // LOGIN FALLIDO
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='index.html';</script>";
    }
}
$conn->close();
?>