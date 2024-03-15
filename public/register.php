<?php
// Conexión a la base de datos SQLite
$database = new SQLite3('users.db');

// Recibir datos del formulario de registro
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dateOfBirth = $_POST['dateOfBirth'];

// Verificar si el usuario ya existe en la base de datos
$query = $database->prepare('SELECT * FROM users WHERE username=:username OR email=:email');
$query->bindValue(':username', $username, SQLITE3_TEXT);
$query->bindValue(':email', $email, SQLITE3_TEXT);
$result = $query->execute();

if ($result->fetchArray()) {
    echo "El usuario ya existe.";
} else {
    // Insertar usuario en la base de datos
    $query = $database->prepare('INSERT INTO users (username, email, password, firstName, lastName, dateOfBirth) VALUES (:username, :email, :password, :firstName, :lastName, :dateOfBirth)');
    $query->bindValue(':username', $username, SQLITE3_TEXT);
    $query->bindValue(':email', $email, SQLITE3_TEXT);
    $query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), SQLITE3_TEXT); // Hash de la contraseña
    $query->bindValue(':firstName', $firstName, SQLITE3_TEXT);
    $query->bindValue(':lastName', $lastName, SQLITE3_TEXT);
    $query->bindValue(':dateOfBirth', $dateOfBirth, SQLITE3_TEXT);
    $query->execute();

    echo "Registro exitoso.";
}

$database->close();
?>
