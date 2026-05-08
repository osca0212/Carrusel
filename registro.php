<?php
$servername = "fdb1033.awardspace.net";
$username_db = "4745752_communitycollage";
$password_db = "Galleta01;)";
$dbname = "4745752_communitycollage";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Verificar si existe
$sql_check = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    echo "<script>alert('El usuario ya existe'); window.location.href='index.html';</script>";
} else {
    $sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registro exitoso'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>