<?php session_start(); ?>
<?php
     $username = $_POST['username'];
     $password = $_POST['password'];

     if($username == 'remy' && $password == '105914423') {
          $_SESSION['user'] = $username;
          header('Location: welcome.php');
     } else {
          echo "Invalid login. <a href='login.php'>Try again</a>";
     }

?>
