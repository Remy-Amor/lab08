<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Process</title>
</head>
<?php include header.inc; ?>
<body>
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
<?php include footer.inc ?>

</body>
</html>