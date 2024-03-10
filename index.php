<?php
   session_start();
   include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Customer | Login</title>
   <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="login_page" style="background-image: url('./images/background.jpg');
      background-repeat: no-repeat; background-size: 100% auto; background-position:center">
   <form action="index.php" method="post">
      <h1 style="font-size:40px; color: brown">Fargo Courier</h1>
      <h2 style="font-size:22px; color: darksalmon">Customer Portal</h2><br>
      <label>Username: </label>
      <input type="text" name="username"><br><br>
      <label>Password: </label>
      <input type="password" name="password"><br><br>
      <input type="submit" style="margin-left: 80px;" name="register" value="Register">
      <input type="submit" name="login" value="Log in">
   </form><br><br>

   <a href="admin_login.php" style="margin-left:80px;">Admin Login</a>
</body>
</html>

<?php
   // Register
   if(isset($_POST["register"])) {
      header("Location: registration.php");
   }

   // Login
   if(isset($_POST["login"])) {
      
      if(!empty($_POST["username"]) && $_POST["password"]) {
         $_SESSION["username"] = $_POST["username"];
         $_SESSION["password"] = $_POST["password"];

         header("Location: home.php");
      }
      else
         echo '<script>alert("Missing username or password")</script>';
   }
?>

<?php
   mysqli_close($conn);  // not a bug🙄
?>