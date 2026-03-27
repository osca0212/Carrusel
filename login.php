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
    $pass = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE email = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('¡Bienvenido!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='index.html';</script>";
    }
}

$conn->close();
?>