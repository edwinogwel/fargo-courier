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

<body>
   <div class="w3-container" id="contact">
      <h1 class="w3-xxxlarge w3-text-red"><b>Registration.</b></h1>
      <hr style="width:50px;border:5px solid red" class="w3-round">

      <form action="registration.php" method="post">
         <div class="w3-section">
            <label>Name</label>
            <input class="w3-input w3-border" type="text" name="name" required>
         </div>
         <div class="w3-section">
            <label>Email</label>
            <input class="w3-input w3-border" type="text" name="email" required>
         </div>
         <div class="w3-section">
            <label>Mobile</label>
            <input class="w3-input w3-border" type="text" name="mobile" required>
         </div>
         <div class="w3-section">
            <label>Address</label>
            <input class="w3-input w3-border" type="text" name="address" required>
         </div>
         <div class="w3-section">
            <label>Username</label>
            <input class="w3-input w3-border" type="text" name="username" required>
         </div>
         <div class="w3-section">
            <label>Password</label>
            <input class="w3-input w3-border" type="text" name="password" required>
         </div>
         <button type="submit" class="w3-button w3-block w3-padding-large  w3-red w3-margin-bottom"
                 name="register">Register
         </button>
      </form>
   </div>
</body>
</html>

<?php
   //   Registration 
   if (isset($_POST["register"])) {
      // filter malicious script(s)
      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
      $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
      $mobile = filter_input(INPUT_POST, "mobile", FILTER_SANITIZE_SPECIAL_CHARS);
      $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);

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
         $sql = "INSERT INTO users (name, email, mobile, address, user, password)
                 VALUES ('$name', '$email', '$mobile', '$address', '$username', '$hash')";

         try {
            mysqli_query($conn, $sql);
            echo '<script>alert("You are now registered! Go back and login")</script>';
            // header("Location: index.php");
         } catch (mysqli_sql_exception) {
            echo '<script>alert("That username is taken")</script>';
         }
      }
   }
?>
<?php
   mysqli_close($conn);  // not a bug🙄
?>