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
      <h1 style="font-size: 40px;">Fargo Courier</h1>
      <h2 style="font-size: 20px;">Customer Portal</h2><br>
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
   //   registration 
   if (isset($_POST["register"])) {
      // filter malicious script(s)
      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

      if (empty($username)) {
         echo "<br>";
         echo "<br>";
         echo "Please enter a username";
      } elseif (empty($password)) {
         echo "<br>";
         echo "<br>";
         echo "Please enter a password";
      } else {
         $hash = password_hash($password, PASSWORD_DEFAULT);
         $sql = "INSERT INTO users (user, password)
                 VALUES ('$username', '$hash')";

         try {
            mysqli_query($conn, $sql);
            echo "<br>";
            echo "<br>";
            echo "You are now registered!";
         } catch (mysqli_sql_exception) {
            echo "<br>";
            echo "<br>";
            echo "That username is taken";
         }
      }
   }

   // login
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