<?php
    session_start();
    $name = $email = $password = '';
    $errors = array('name' => '','email' => '' ,'password' => '' );

    if(isset($_POST['submit'])){
      //sessions

      /*$_SESSION['name'] = $_POST['name'];
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['password'] = $_POST['password'];*/

      //check Name
      if(empty($_POST['name'])){
        $errors['name'] = "A name is required <br>";
      } else{
        $name = $_POST['name'];
        $_SESSION['name'] = $_POST['name'];
      }
      //check email
      if(empty($_POST['email'])){
        $errors['email'] = "An email is required <br>";
      } else{
        $email = $_POST['email'];
        $_SESSION['email'] = $_POST['email'];
      }
      //check password
      if(empty($_POST['password'])){
        $errors['password'] = 'You must set a password <br>';
      } else {
        $password = $_POST['password'];
        $_SESSION['password'] = $_POST['password'];
      }
      header_remove();
      if (array_filter($errors)) {
      }else {
        header('Location: index.php');
      }
      /*echo "First name: ".$_POST['name']."<br>";
      echo "email address: ".$_POST['email']."<br>";
      echo "Your password has been set successfully <br>";*/
    }
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
    <form class="" action="register.php" method="post">
      <input type="text" name="name" value="<?php echo $name ?>" placeholder="What is your name"> <br>
      <div><?php echo $errors['name'] ?></div> <br>
      <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email address here"> <br>
      <div><?php echo $errors['email'] ?></div> <br>
      <input type="password" name="password" value="<?php echo $password ?>" placeholder="Password"> <br>
      <div><?php echo $errors['password'] ?></div> <br>
      <input type="submit" name="submit" value="Register">
      <input type="submit" name="submit" value="Log in">
    </form>
  </body>
</html>
