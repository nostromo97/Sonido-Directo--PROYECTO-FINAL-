<?php
session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: ../signupPage.html');
}

require 'database.php';

if (!empty($_POST['nombre']) && !empty($_POST['primer_apellido']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  $nombre = $_POST['nombre'];
  $primer_apellido = $_POST['primer_apellido'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $insertQuery = $conn->prepare('INSERT INTO usuarios (nombre, primer_apellido, username, password) VALUES (:nombre, :primer_apellido, :username, :password)');
  $insertQuery->bindParam(':nombre', $nombre);
  $insertQuery->bindParam(':primer_apellido', $primer_apellido);
  $insertQuery->bindParam(':username', $username);
  $insertQuery->bindParam(':password', $password);

  if ($insertQuery->execute()) {
    echo "<h2>Registro exitoso. Ahora puedes iniciar sesión.</h2>";
    header("Location: ../loginPage.php");
  } else {
    echo "<h1>Error al registrar el usuario.</h1>";
  }
} else {
  echo "<a>Incorrecto. Los campos no pueden estar vacíos.</a>";
}
?>