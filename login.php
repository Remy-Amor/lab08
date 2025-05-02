<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
</head>
<?php include header.inc; ?>
<body>
     <main>
          <form action="process.php" method="post">
               <label for="name">Username:</label>
               <input type="text" name="username" id="username">
               <br>
               <label for="password">Password</label>
               <input type="password" name="password" id="password">
               <input type="hidden" value="abc123" name="token">
               <input type="submit" value="Login">
          </form>
     </main>
</body>
<?php include footer.inc ?>

</html>