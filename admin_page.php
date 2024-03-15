<?php
   session_start();
?>
<?php
   if(isset($_POST["logout"]))  {
      session_destroy();
      header("Location: admin_login.php");
   }
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Administrator</title>
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
   <!-- Navbar -->
   <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
      <div class="w3-container">
         <h3 class="w3-padding-64"><b>Admin<br>Portal</b></h3>
      </div>
      <div class="w3-bar-block">
         <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
         <a href="#query_customers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Customers Report</a>
      </div>
   </nav>

   <!-- PAGE CONTENT-->
   <div class="w3-main" style="margin-left:340px;margin-right:40px">
      <!-- Logout -->
      <form action="admin_page.php" method="post">
         <br>
         <input type="submit" name="logout" value="logout" style="margin-left: 90%;">
      </form>

      <img src="./images/admin_home.jpg" alt="img">

   </div>
</body>
</html>
<?php
   include("footer.html");
?>