<?php
  session_start();
  require_once('database.php');
  $users_query = "SELECT * FROM users";
  $shipments_query = "SELECT * FROM shipments";
  $standard_query = "SELECT * FROM standard_subscribers";
  $express_query = "SELECT * FROM express_subscribers";
  $users_result = mysqli_query($conn, $users_query);
  $shipments_result = mysqli_query($conn, $shipments_query);
  $standard_result = mysqli_query($conn, $standard_query);
  $express_result = mysqli_query($conn, $express_query);
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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size:16px;}
    .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
    .w3-half img:hover{opacity:1}
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:160px;font-weight:bold;" id="mySidebar"><br>
    <div class="w3-container">
      <h3 class="w3-padding-64"><b>Admin<br>Portal</b></h3>
    </div>
    <div class="w3-bar-block">
      <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
      <a href="#customers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Reports</a>
      <a href="#shipments" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Shipments</a>
      <a href="#standard" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Standard Customers</a>
      <a href="#express" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Express Customers</a>
    </div>
  </nav>

  <!-- PAGE CONTENT-->
   <div class="w3-main" style="margin-left:170px; margin-right:40px">
    <!-- Home -->
    <div class="w3-container" id="send_parcel" style="margin-top:75px">
      <!-- Logout -->
      <form action="admin_page.php" method="post">
        <br>
        <input type="submit" name="logout" value="logout" style="margin-left: 90%;">
      </form>

      <img src="./images/admin_home.jpg" alt="img" style="height:450px; width:auto">
    </div><br><br>

    <!-- Customers-->
    <div class="w3-container" id="customers" style="margin-top:75px margin-left:170px">
     <h1 class="w3-xxxlarge w3-text-red"><b>Customers.</b></h1>
      <div class="bg-dark">
        <div class="container">
            <div class="row mt-5">
              <div class="col">
                  <div class="card mt-5 ">
                    <div class="card-header">
                      <h2 class="display-6 text-center">Customers Details</h2>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                          <td>ID</td>
                          <td>Name</td>
                          <td>Email</td>
                          <td>Mobile</td>
                          <td>Address</td>
                          <td>Username</td>
                          <td>Reg Date</td>
                          <td>Delete</td>
                        </tr>
                        <tr>
                        <?php
                          while($row = mysqli_fetch_assoc($users_result))
                          {
                        ?>
                          <td><?php echo $row['ID']?></td>
                          <td><?php echo $row['Name']?></td>
                          <td><?php echo $row['Email']?></td>
                          <td><?php echo $row['Mobile']?></td>
                          <td><?php echo $row['Address']?></td>
                          <td><?php echo $row['Username']?></td>
                          <td><?php echo $row['Reg Date']?></td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                          <?php
                            }
                          ?>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
        </div><br><br>
      </div>
    </div><br>

    <!-- Shipments -->
    <div class="w3-container" id="shipments" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>Shipments.</b></h1>
      <div class="bg-dark">
        <div class="container">
            <div class="row mt-5">
              <div class="col">
                  <div class="card mt-5 ">
                    <div class="card-header">
                      <h2 class="display-6 text-center">Shipments Underway</h2>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                          <td>ID</td>
                          <td>Sender</td>
                          <td>Receiver</td>
                          <td>Mobile</td>
                          <td>Address</td>
                          <td>Cargo</td>
                          <td>Tracking No</td>
                          <td>Status</td>
                        </tr>
                        <tr>
                        <?php
                          while($row = mysqli_fetch_assoc($shipments_result))
                          {
                        ?>
                          <td><?php echo $row['ID']?></td>
                          <td><?php echo $row['Sender']?></td>
                          <td><?php echo $row['Receiver']?></td>
                          <td><?php echo $row['Mobile']?></td>
                          <td><?php echo $row['Address']?></td>
                          <td><?php echo $row['Cargo']?></td>
                          <td><?php echo $row['Tracking_No']?></td>
                          <td><a href="#" class="btn btn-success">Mark Complete</a></td>
                        </tr>
                          <?php
                            }
                          ?>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
        </div><br><br>
      </div>
    </div><br>

    <!-- Standard Subscribers -->
    <div class="w3-container" id="standard" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>Standard Subscribers.</b></h1>
      <div class="bg-dark">
        <div class="container">
            <div class="row mt-5">
              <div class="col">
                  <div class="card mt-5 ">
                    <div class="card-header">
                      <h2 class="display-6 text-center">Card Details</h2>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                          <td>ID</td>
                          <td>Name</td>
                          <td>Card</td>
                          <td>Expiry</td>
                          <td>CVV</td>
                        </tr>
                        <tr>
                        <?php
                          while($row = mysqli_fetch_assoc($standard_result))
                          {
                        ?>
                          <td><?php echo $row['ID']?></td>
                          <td><?php echo $row['Name']?></td>
                          <td><?php echo $row['Card']?></td>
                          <td><?php echo $row['Expiry']?></td>
                          <td><?php echo $row['Cvv']?></td>
                        </tr>
                          <?php
                            }
                          ?>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
         </div><br><br>
      </div>
    </div><br>

    <!-- Express Subscribers -->
    <div class="w3-container" id="express" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>Express Subscribers.</b></h1>
      <div class="bg-dark">
        <div class="container">
            <div class="row mt-5">
              <div class="col">
                  <div class="card mt-5 ">
                    <div class="card-header">
                      <h2 class="display-6 text-center">Card Details</h2>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                          <td>ID</td>
                          <td>Name</td>
                          <td>Card</td>
                          <td>Expiry</td>
                          <td>CVV</td>
                        </tr>
                        <tr>
                        <?php
                          while($row = mysqli_fetch_assoc($express_result))
                          {
                        ?>
                          <td><?php echo $row['ID']?></td>
                          <td><?php echo $row['Name']?></td>
                          <td><?php echo $row['Card']?></td>
                          <td><?php echo $row['Expiry']?></td>
                          <td><?php echo $row['Cvv']?></td>
                        </tr>
                          <?php
                            }
                          ?>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
         </div><br><br>
      </div>
    </div><br>

    <!-- End of page -->
   </div>

    <!-- Footer -->
   <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-xlarge"
          style="margin-left: 10%; background-color: rgb(214, 214, 214);">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Fargo Courier™️ 2024. All rights reserved.</a></p>
  </footer>

</body>
</html>