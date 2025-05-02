<?php include "headertest.inc"; ?>
          <form action="process.php" method="post">
               <label for="username">Username:</label>
               <input type="text" name="username" id="username">
               <br>
               <label for="password">Password</label>
               <input type="password" name="password" id="password">
               <input type="hidden" value="abc123" name="token">
               <input type="submit" value="Login">
          </form>
<?php include "footer.inc"; ?>

</html>