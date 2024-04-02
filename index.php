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
      <h1 style="font-size:40px;color:brown;">Fargo Courier</h1>
      <h2 style="font-size:23px;color:coral;background-color:darkslategray">Customer Portal</h2><br>
      <label>Username: </label>
      <input type="text" name="username" autocomplete="off"><br><br>
      <label>Password: </label>
      <input type="password" name="password"><br><br>
      <input type="submit" style="margin-left: 80px;" name="register" value="Register">
      <input type="submit" name="login" value="Log in">
   </form><br><br>

   <a href="admin_login.php" style="margin-left:80px;">Admin Login</a>
</body>
</html>

<?php
   // Redirect to registration page
   if(isset($_POST["register"])) {
      header("Location: registration.php");
   }

   // Validate usr & pwd from DB
   if(isset($_POST["login"])) {

      if(!empty($_POST["username"]) && $_POST["password"]) {
         $username = $_POST["username"];
         $password = $_POST["password"];
         $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
         $result = mysqli_query($conn, $query);
         $count = mysqli_num_rows($result);

         if($count>0)
            header("Location: home.php");    // Login Successful
         else
            echo '<script>alert("Login Unsuccessful")</script>';
      }
      else
         echo '<script>alert("Missing username or password")</script>';
   }
?>

<?php
   mysqli_close($conn);
?>