<?php
  SESSION_START();
  if (!isset($_COOKIE['login'])) {
      header("Location: login.php");
      die();
  }

  $user = $_SESSION["user"];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      html{
        background-color: rgba(120, 250, 120, 0.5);
      }
      h1{
        text-align: center;
        color: magenta;
      }
      #begrüßung{
        text-align: center;
        font-size: 4em;
      }
    </style>
  </head>
  <body>
    <h1>Seite 2</h1>
    <p id="begrüßung"> Guten Tag <?php echo $user; ?>!</p>
    <p><a href="http://localhost:8060/PHP_lernen/login.php">Logout</a></p>
  </body>
</html>
