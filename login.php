<?php
  session_start();
  $w_email = $w_password = '';
  $errors = array('email' => '', 'password' => '');
  if (isset($_POST['login'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    //check email
    if(empty($_POST['email'])){
      $errors['email'] = "Enter your email";
    }else{
      $email = $_POST['email'];
    }
    //check password
    if(empty($_POST['password'])){
      $errors['password'] = 'Enter your password';
    }else{
      $password = $_POST['password'];
    }
    //login details authentication
      //email
    if ($_POST['email'] != $_SESSION['email']) {
      $w_email = "Your email is incorrect";
    }else{
      $_SESSION['validuser'] = $_POST['email'];
    }
      //password
    if ($_POST['password'] != $_SESSION['password']) {
      $w_password = "Your password is incorrect";
    }else{
      $_SESSION['validpassword'] = $_POST['password'];
    }
    if (array_filter($errors)) {
      //do nothing
    }elseif ($w_email || $w_password) {
      //do nothing again
    }
    else{
      header('Location: index.php');
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action = "" method="post">
      <input type="email" name="email" value="" placeholder="Enter your email"> <br>
      <div><?php echo $errors['email'] ?></div><br>
      <div class=""><?php echo $w_email ?></div>
      <input type="password" name="password" value=""placeholder="Enter your password"> <br>
      <div><?php echo $errors['password'] ?></div>
      <input type="submit" name="login" value="Log in">
    </form>
  </body>
</html>
