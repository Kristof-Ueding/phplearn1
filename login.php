<?php
SESSION_START();
if (!empty($_POST)) {
  $_SESSION["user"] = $_POST['user'];
  $_SESSION["password"] = $_POST['password'];
  if (check($_SESSION["user"],$_SESSION["password"])) {
    setcookie("login", time());
    header("Location: http://localhost:8070/PHP_lernen/page1.php");
    die();
  }else {
        $error = "Falsche Kennung und/oder falsches Passwort";
  }

  if (isset($_POST['sign_up'])) {
    header("Location: http://localhost:8070/PHP_lernen/signing_up.php");
  }

if (isset($_GET['logout'])) {
  setcookie('login',"",time()-1);
}
}

function check($user,$password){
  if($user == "Kristof" && $password == "1"){
    return true;
  }elseif ($user == "Peter" && $password == "1"){
    return true;
  }else {
    return false;
  }
}

 ?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      h1{
        text-align: center;
        color: green;
      }
      .login{
        text-align: center;
      }
      .false{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Seite 1</h1>
    <form class="login" method="post">
      <label for="user">User: </label>
      <input id="user" type="text" name="user" value="">
      <label for="password">Password: </label>
      <input id="password" type="password" name="password" value=""><br><br>
      <input id="go" type="submit" name="login" value="GO">
    </form>
    <?php
      // Fehlermeldung bei fehlgeschlagener Anmeldung:
      if (isset($error)) {
        echo '
        <form style="text-align: center; margin-top: 100px;" method="post">
          <input id="abbrechen" type="submit" value="Abbrechen">
          <input id="sign_up" type="submit" name="sign_up" value="Registrieren">
        </form>
        ';
      }
    ?>
    <script type="text/javascript">
      window.addEventListener("load", function () {
        document.getElementById("go").disabled = true;
        var input = document.getElementById('password');
        input.addEventListener("keyup",checkPin);
        input.focus;
      })
      function checkPin() {
        var user = document.getElementById('user').value;
        var password = document.getElementById('password').value;
        console.log(user);
        if (user != "" && password != "") {
          document.getElementById('go').disabled = false;
        }
      }
    </script>
  </body>
</html>
