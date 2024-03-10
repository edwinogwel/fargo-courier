<?php
   session_start();
   include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="login_page">
   <form action="index.php" method="post">
      <h1 style="font-size:40px;">Fargo Courier</h1>
      <h2 style="font-size:20px; color:darkblue">Customer Portal</h2><br>
      <label>Username: </label>
      <input type="text" name="username"><br><br>
      <label>Password: </label>
      <input type="password" name="password"><br><br>
      <input type="submit" style="margin-left: 80px;" name="register" value="Register">
      <input type="submit" name="login" value="Log in">
   </form><br>

   <a href="admin_login.php">Admin Login</a>
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
      else {
         echo "<br>";
         echo "<br>";
         echo "Missing username or password";
      }
   }
?>

<?php
   mysqli_close($conn);  // not a bug🙄
?>