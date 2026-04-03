<?php
$servername = "fdb1033.awardspace.net";
$username_db = "4745752_communitycollage";
$password_db = "Galleta01;)";
$dbname = "4745752_communitycollage";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $conn->real_escape_string($_POST['usuario']);
    $pass = $_POST['password']; 

    $sql = "SELECT * FROM usuarios WHERE email = '$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $usuario_datos = $result->fetch_assoc();
        
 
        if (password_verify($pass, $usuario_datos['password']) || $pass == $usuario_datos['password']) {
            echo "<script>alert('¡Bienvenido!'); window.location.href='inicio_privado.php';</script>";
        } else {
            echo "<script>alert('Contraseña incorrecta'); window.location.href='index.html';</script>";
        }
    } else {
        echo "<script>alert('El correo no está registrado'); window.location.href='index.html';</script>";
    }
}

$conn->close();
?>