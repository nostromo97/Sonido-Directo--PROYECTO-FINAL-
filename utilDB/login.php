<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: ../loginPage.html');
  }

  require 'database.php';

  $message = '';

  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, username, password FROM usuarios WHERE username = :username');
    $records->bindParam(':username', $_POST['username']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    

    if ($results && ($_POST['password'] === $results['password']))        {
      $_SESSION['user_id'] = $results['id'];
      header("Location: ../homePage.html");
    } else {
        echo "<h2>Incorrecto. Revise los campos introducidos</h2>";
    }
  }

  else{

  }

?>

