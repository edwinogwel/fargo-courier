<?php
   session_start();
   include("database.php");
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registration</title>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
      body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
      body {font-size:16px;}
      .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
      .w3-half img:hover{opacity:1}
   </style>
</head>

<body style="background-image: url('./images/background2.jpg');background-repeat: no-repeat;
   background-size: 100% auto; background-position:center;">

   <form action="registration.php" method="post">
      <input type="submit" value="login" name="login"
         style="margin-top:10px;margin-left:90%;float:left">
   </form>

   <div class="w3-container" id="contact" style="width:50%;margin:auto">

      <h1 class="w3-xxxlarge" style="color:darkgreen"><b>Registration.</b></h1>
      <hr style="width:50px;border:5px solid green" class="w3-round">

      <form action="registration.php" method="post" style="color:gray">
         <div class="w3-section">
            <label><strong>Name</label>
            <input class="w3-input w3-border" type="text" name="name" autocomplete="off" required>
         </div>
         <div class="w3-section">
            <label><strong>Email</strong></label>
            <input class="w3-input w3-border" type="text" name="email" autocomplete="off" required>
         </div>
         <div class="w3-section">
            <label><strong>Mobile</strong></label>
            <input class="w3-input w3-border" type="text" name="mobile" autocomplete="off" required>
         </div>
         <div class="w3-section">
            <label><strong>Address</strong></label>
            <input class="w3-input w3-border" type="text" name="address" autocomplete="off" required>
         </div>
         <div class="w3-section">
            <label><strong>Username</strong></label>
            <input class="w3-input w3-border" type="text" name="username" autocomplete="off" required>
         </div>
         <div class="w3-section">
            <label><strong>Password</strong></label>
            <input class="w3-input w3-border" type="text" name="password" autocomplete="off" required>
         </div>
         <button type="submit" class="w3-button w3-block w3-padding-large w3-margin-bottom"
                 style="background:darkgreen; color:white"
                 name="register">Register
         </button>
      </form>
   </div>
</body>
</html>

<?php
   // Registration 
   if (isset($_POST["register"])) {
      // filter malicious script(s)
      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
      $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
      $mobile = filter_input(INPUT_POST, "mobile", FILTER_SANITIZE_SPECIAL_CHARS);
      $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);

      // $hash = password_hash($password, PASSWORD_DEFAULT);
      
      $sql = "INSERT INTO users (name, email, mobile, address, username, password)
              VALUES ('$name', '$email', '$mobile', '$address', '$username', '$password')";

      try {
         mysqli_query($conn, $sql);
         echo '<script>alert("You are now registered. Go back and login")</script>';
      } catch (mysqli_sql_exception) {
         echo '<script>alert("That username is taken")</script>';
      }
   }

   // Redirect to login page
   if(isset($_POST['login'])) {
      header("Location: index.php");
   }
?>
<?php
   mysqli_close($conn);
?>