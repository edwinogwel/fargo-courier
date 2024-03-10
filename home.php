<?php
   session_start();
?>
<?php
   if(isset($_POST["logout"]))  {
      session_destroy();
      header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fargo Courier | Home</title>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="./javascript/script.js"></script>
   <style>
      body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
      body {font-size:16px;}
      .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
      .w3-half img:hover{opacity:1}
   </style>
</head>

<body>

   <!-- Navbar-->
   <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
      <div class="w3-container">
         <h3 class="w3-padding-64"><b>Fargo<br>&nbsp;Courier</b></h3>
      </div>
      <div class="w3-bar-block">
         <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
         <a href="#send_parcel" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Send Parcel</a>
         <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>
         <a href="#owners" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Owners</a>
         <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
      </div>
   </nav>

   <!-- Top menu on small screens -->
   <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
      <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
      <span>Fargo Courier</span>
   </header>

   <!-- Overlay effect when opening sidebar on small screens -->
   <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

   <!-- PAGE CONTENT-->
   <div class="w3-main" style="margin-left:340px;margin-right:40px">
   
      <!-- Logout -->
      <form action="home.php" method="post">
         <br>
         <input type="submit" name="logout" value="logout" style="margin-left: 90%;">
      </form>
      
      <!-- Header -->
      <div class="w3-container" style="margin-top:80px" id="showcase">
         <h1 class="w3-jumbo"><b>Deliveries</b></h1>
         <h1 class="w3-xxxlarge w3-text-red"><b>Gallery.</b></h1>
         <hr style="width:50px;border:5px solid red" class="w3-round">
      </div>

      <!-- Photo grid (modal) -->
      <div class="w3-row-padding">
         <div class="w3-half">
            <img src="./images/on_loading.jpg" style="width:100%" onclick="onClick(this)" alt="Loading goods for shipment">
            <img src="./images/drone.jpg" style="width:100%" onclick="onClick(this)" alt="Drone delivery">
            <img src="./images/bicycle.jpg" style="width:100%" onclick="onClick(this)" alt="Bicycle delivery">
         </div>
         
         <div class="w3-half">
            <img src="./images/food.png" style="width:100%" onclick="onClick(this)" alt="Delivery woman">
            <img src="./images/cat.jpg" style="width:100%" onclick="onClick(this)" alt="Meow! Meow! Your delivery Mothaf*">
            <img src="./images/deliveryman.jpg" style="width:100%" onclick="onClick(this)" alt="Home delivery">
         </div>
      </div>

      <!-- Modal for full size images on click-->
      <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
         <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
         <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption"></p>
         </div>
      </div>

      <!-- Send parcel -->
      <div class="w3-container" id="send_parcel" style="margin-top:75px">
         <h1 class="w3-xxxlarge w3-text-red"><b>Send.</b></h1>
         <hr style="width:50px;border:5px solid red" class="w3-round">
         <p>Enter the details of the person you would like to send the package to in the form below. You are welcome again!</p>
         <form action="tracking_no.php" method="post">
            <div class="w3-section">
               <label>Name</label>
               <input class="w3-input w3-border" type="text" name="Name" required>
            </div>
            <div class="w3-section">
               <label>Mobile</label>
               <input class="w3-input w3-border" type="text" name="Mobile" required>
            </div>
            <div class="w3-section">
               <label>Address</label>
               <input class="w3-input w3-border" type="text" name="Address" required>
            </div>
            <div class="w3-section">
               <label>Cargo</label>
               <input class="w3-input w3-border" type="text" name="Cargo" required>
            </div>
            <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Cargo</button>
         </form>
      </div>

      <!-- Services -->
      <div class="w3-container" id="services" style="margin-top:75px">
         <h1 class="w3-xxxlarge w3-text-red"><b>Services.</b></h1>
         <hr style="width:50px;border:5px solid red" class="w3-round">
         <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
         <p>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         </p>
      </div>

      <!-- Owners -->
      <div class="w3-container" id="owners" style="margin-top:75px">
         <h1 class="w3-xxxlarge w3-text-red"><b>Owners.</b></h1>
         <hr style="width:50px;border:5px solid red" class="w3-round">
         <p>The best team in the world.</p>
         <p>We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         </p>
         <p><b>The owners have a wealth of experience in the industry: </b>:</p>
      </div>

      <!-- Company Leads -->
      <div class="w3-row-padding w3-grayscale">
         <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
               <img src="./images/John_Doe.jpg" alt="John" style="width:100%">
               <div class="w3-container">
                  <h3>John Doe</h3>
                  <p class="w3-opacity">CEO & Founder</p>
                  <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
               </div>
            </div>
         </div>
         <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
               <img src="./images/Jane_Doe.jpg" alt="Jane" style="width:100%">
               <div class="w3-container">
                  <h3>Jane Doe</h3>
                  <p class="w3-opacity">COO</p>
                  <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
               </div>
            </div>
         </div>
         <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
               <img src="./images/Mike_Ross.jpg" alt="Mike" style="width:100%">
               <div class="w3-container">
                  <h3>Mike Ross</h3>
                  <p class="w3-opacity">CTO</p>
                  <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
               </div>
            </div>
         </div>
      </div>

      <!-- Contact -->
      <div class="w3-container" id="contact" style="margin-top:75px">
         <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
         <hr style="width:50px;border:5px solid red" class="w3-round">
         <p>Do you want us to safely ship your goods? Fill out the form and let us submit it for you 🙂 We love serving you!</p>
         <form action="/action_page.php" target="_blank">
            <div class="w3-section">
               <label>Name</label>
               <input class="w3-input w3-border" type="text" name="Name" required>
            </div>
            <div class="w3-section">
               <label>Email</label>
               <input class="w3-input w3-border" type="text" name="Email" required>
            </div>
            <div class="w3-section">
               <label>Message</label>
               <input class="w3-input w3-border" type="text" name="Message" required>
            </div>
            <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
         </form>
      </div>
      
      <!-- End page content -->
   </div>
   
   <?php
      include("footer.html");
   ?>

   <script>
      function onClick(element) {
         document.getElementById("img01").src = element.src;
         document.getElementById("modal01").style.display = "block";
         var captionText = document.getElementById("caption");
         captionText.innerHTML = element.alt;
      }
   </script>

</body>
</html>