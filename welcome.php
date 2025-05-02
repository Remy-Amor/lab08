<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<?php include header.inc; ?>
<body>
     <?php 
          if(isset($_SESSION['user'])) {
               echo  "Welcome, " .$_SESSION['user'];
          } else {
               header('Location: login.php');
          }
     ?>
</body>
<?php include footer.inc ?>
</html>