<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="login_page">
   <form action="admin_login.php" method="post">
      <h1 style="font-size: 40px;">Fargo Courier</h1>
      <h2 style="font-size: 20px;">Admin Portal</h2><br>
      <label>Username: </label>
      <input type="text" name="username"><br><br>
      <label>Password: </label>
      <input type="password" name="password"><br><br>
      <input type="submit" name="login" style="margin-left: 80px;" value="Log in">
   </form><br>

   <a href="index.php">Customer Login</a>
</body>
</html>
<?php
   // login
   if (isset($_POST["login"])) {

      if (!empty($_POST["username"]) && $_POST["password"]) {

         if ($_POST["username"] == "admin" && $_POST["password"] == "1234") 
            header("Location: admin_page.php");

      } else {
         echo "<br>";
         echo "<br>";
         echo "Missing username or password";
      }
   }
?>