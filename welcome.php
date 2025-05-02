<?php
     session_start();
     if(isset($_SESSION['user'])) {
          echo  "Welcome, " .$_SESSION['user'];
     } else {
          header('Location: login.php');    
           }
     echo '<form action="welcome.php" method="post"> <input type="submit" name="logout" value="logout"> </form>';
     if(isset($_POST['logout'])) {
          session_destroy();
          header('Location: login.php');
     }
     ?>