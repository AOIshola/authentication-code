<?php
  session_start();

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];
  //authentication
  if ($_SESSION['email'] != $email || $_SESSION['password'] != $password) {
    header('Location: login.php');
  }
  /*if (!isset($_SESSION['validuser'])) {
    header('Location: login.php');
  }elseif (!isset($_SESSION['validpassword'])) {
    header('Location: login.php');
  }*/?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <body>
    <?php echo "Welcome $name, You have logged in successfully <br>";
      echo "Your email is: $email"
    ?>
  </body>
  </html>
