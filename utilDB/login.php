<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: ../loginPage.php');
  }

  require 'database.php';

  $message = '';

  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, username, password FROM usuarios WHERE username = :username');
    $records->bindParam(':username', $_POST['username']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    

    if ($results && ($_POST['password'] === $results['password'])) 
    {
      echo"<h2>Bienvenid@</h2>";
      header("Location: ../homePage.html");
      
      $_SESSION['user_id'] = $results['id'];
      
    } else {
      header("Location: ../loginPage.php?ERROR=500");
      
      echo "<h2>Incorrecto. Revise los campos introducidos</h2>";
    }
  }

?>

