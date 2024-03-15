<?php
session_start();

// Conexión a la base de datos SQLite
$database = new SQLite3('users.db');

// Recibir datos del formulario de inicio de sesión
$username = $_POST['username'];
$password = $_POST['password'];

// Buscar usuario en la base de datos
$query = $database->prepare('SELECT * FROM users WHERE username=:username');
$query->bindValue(':username', $username, SQLITE3_TEXT);
$result = $query->execute();
$user = $result->fetchArray(SQLITE3_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    // Inicio de sesión exitoso
    $_SESSION['username'] = $user['username'];
    header('Location: libro.html'); // Redirigir al archivo principal después del inicio de sesión
} else {
    // Error en el inicio de sesión
    echo "Nombre de usuario o contraseña incorrectos.";
}

$database->close();
?>
