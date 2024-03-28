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
   <title>Home</title>
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
         <h3 class="w3-padding-64"><b>Fargo<br>Courier</b></h3>
      </div>
      <div class="w3-bar-block">
         <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
         <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a>
         <a href="#send_cargo" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Send Cargo</a>
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
         <input type="submit" name="logout" value="logout" style="margin-left:90%">
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
            <img src="./images/deliveryman.jpg" style="width:100%" onclick="onClick(this)" alt="Home delivery">
            <img src="./images/drone.jpg" style="width:100%" onclick="onClick(this)" alt="Drone delivery">
            <img src="./images/on_loading.jpg" style="width:100%" onclick="onClick(this)" alt="Loading goods for shipment">
         </div>
         
         <div class="w3-half">
            <img src="./images/food.png" style="width:100%" onclick="onClick(this)" alt="Delivery woman">
            <img src="./images/cat.jpg" style="width:100%" onclick="onClick(this)" alt="Meow! Meow! Your delivery Motha*">
            <img src="./images/bicycle.jpg" style="width:100%" onclick="onClick(this)" alt="Bicycle delivery">
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

      <!-- Packages -->
      <div class="w3-container" id="packages" style="margin-top:75px">
         <h1 class="w3-xxxlarge w3-text-red"><b>Packages.</b></h1>
         <hr style="width:50px;border:5px solid red" class="w3-round">
         <p>
            We are a cargo shipment company that focus on getting your goods to their
            intended recipient in time!
         </p>
         <p>
            Discover seamless and reliable delivery solutions with Fargo Express Couriers.
            Our courier business is committed to providing swift and secure transportation
            services tailored to meet your specific needs. From urgent document deliveries to
            time-sensitive packages, we offer a range of courier services that ensure your items
            reach their destination efficiently. With a dedicated team of experienced couriers and a
            state-of-the-art tracking system, we guarantee real-time updates and the utmost care for
            your shipments. Choose Fargo Express Couriers for a dependable partner in prompt and
            professional delivery services, connecting you and your business to success.
         </p>

         <div class="w3-row-padding">
            <div class="w3-half w3-margin-bottom">
               <ul class="w3-ul w3-light-grey w3-center">
                  <li class="w3-dark-grey w3-xlarge w3-padding-32">Standard</li>
                  <li class="w3-padding-16">Delivery</li>
                  <li class="w3-padding-16">Reliable</li>
                  <li class="w3-padding-16">Delayed Tracking</li>
                  <li class="w3-padding-16">Weekday</li>
                  <li class="w3-padding-16">Motor-Vehicle Delivery</li>
                  <li class="w3-padding-16">
                     <h2>$ 69</h2>
                     <span class="w3-opacity">per delivery</span>
                  </li>
                  <li class="w3-light-grey w3-padding-24">
                     <button class="w3-button w3-white w3-padding-large w3-hover-black"
                             style="background-color: #9b9595 !important;"
                             onclick="location.href='standardCheckout.php'">Sign Up</button>
                  </li>
               </ul>
            </div>

            <div class="w3-half">
               <ul class="w3-ul w3-light-grey w3-center">
                  <li class="w3-red w3-xlarge w3-padding-32">Express</li>
                  <li class="w3-padding-16">Quick Delivery</li>
                  <li class="w3-padding-16">More Reliable</li>
                  <li class="w3-padding-16">Real-time Tracking</li>
                  <li class="w3-padding-16">Weekday n' Weekend</li>
                  <li class="w3-padding-16">Drone Delivery</li>
                  <li class="w3-padding-16">
                     <h2>$ 109</h2>
                     <span class="w3-opacity">per delivery</span>
                  </li>
                  <li class="w3-light-grey w3-padding-24">
                     <button class="w3-button w3-red w3-padding-large w3-hover-black"
                             onclick="location.href='expressCheckout.php'">Sign Up</button>
                  </li>
               </ul>
            </div>
         </div>
      </div>

      <!-- Send parcel -->
      <div class="w3-container" id="send_cargo" style="margin-top:75px">
         <h1 class="w3-xxxlarge w3-text-red"><b>Send.</b></h1>
         <hr style="width:50px;border:5px solid red" class="w3-round">
         <p>Enter the details of the person you would like to send the package to in the form below.
            Note that you will be given a <strong>unique tracking number</strong> that you need to keep safely in order
            to track the status of your shipment. You are welcome again! 
         </p>
         <form action="tracking_no.php" method="post">
            <div class="w3-section">
               <label>Sender's Name</label>
               <input class="w3-input w3-border" type="text" name="senderName" autocomplete="off" required>
            </div>
            <div class="w3-section">
               <label>Receiver's Name</label>
               <input class="w3-input w3-border" type="text" name="receiverName" autocomplete="off" required>
            </div>
            <div class="w3-section">
               <label>Receiver's Mobile</label>
               <input class="w3-input w3-border" type="text" name="Mobile" autocomplete="off" required>
            </div>
            <div class="w3-section">
               <label>Receiver's Address</label>
               <input class="w3-input w3-border" type="text" name="Address" autocomplete="off" required>
            </div>
            <div class="w3-section">
               <label>Cargo</label>
               <input class="w3-input w3-border" type="text" name="Cargo" autocomplete="off" required>
            </div>
            <button type="submit" name="send" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Cargo</button>
         </form>
      </div>

      <!-- Owners -->
      <div class="w3-container" id="owners" style="margin-top:75px">
         <h1 class="w3-xxxlarge w3-text-red"><b>Owners.</b></h1>
         <hr style="width:50px;border:5px solid red" class="w3-round">
         <p>The best team in the world.</p>
         <p>
            At Fargo Courier, the dynamic leadership trio is the driving force behind our unparalleled
            success and continued growth. Our visionary CEO sets the tone with strategic foresight, guiding
            the company towards new heights in the ever-evolving logistics industry. The COO, a master of
            operational efficiency, ensures the seamless execution of our day-to-day activities, optimizing
            processes to provide our clients with top-notch, reliable service. Meanwhile, our brilliant CTO
            spearheads technological innovation, implementing cutting-edge solutions that enhance our tracking
            systems, security protocols, and overall customer experience.
         </p>
         <p><b>The owners have a wealth of experience in the industry: </b>:</p>
      </div>

      <!-- Company Leads -->
      <div class="w3-row-padding w3-grayscale">
         <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
               <img src="./images/gunna.jpeg" alt="John" style="width:100%">
               <div class="w3-container">
                  <h3>Khaligraph Jones</h3>
                  <p class="w3-opacity">CEO & Founder</p>
                  <p>
                     Papa Jones is the CEO and Founder of our company. He has a
                     total of 8 years industry expertise under his belt.
                  </p>
               </div>
            </div>
         </div>
         <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
               <img src="./images/billie.jpg" alt="Jane" style="width:100%">
               <div class="w3-container">
                  <h3>Femi One</h3>
                  <p class="w3-opacity">COO</p>
                  <p>
                     Femi is our Chief Operating Officer, and she's the one who has
                     been making sure that all our operations are well co-ordinated.
                  </p>
               </div>
            </div>
         </div>
         <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
               <img src="./images/thugger.jpg" alt="Mike" style="width:100%">
               <div class="w3-container">
                  <h3>Octopizzo</h3>
                  <p class="w3-opacity">CTO</p>
                  <p>
                     Having worked with Google and Apple, Octo has been instrumental
                     in making surely our tech is up-to-date.
                  </p>
               </div>
            </div>
         </div>
      </div>

      <!-- Contact -->
      <div class="w3-container" id="contact" style="margin-top:75px">
         <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
         <hr style="width:50px;border:5px solid red" class="w3-round">
         <p>Do you want us to safely ship your goods? Fill out the form and let us submit it for you 🙂 We love serving you!</p>
         <form action="home.php" method="post">
            <div class="w3-section">
               <label>Name</label>
               <input class="w3-input w3-border" type="text" name="Name" autocomplete="off" required>
            </div>
            <div class="w3-section">
               <label>Email</label>
               <input class="w3-input w3-border" type="text" name="Email" autocomplete="off" required>
            </div>
            <div class="w3-section">
               <label>Message</label>
               <input class="w3-input w3-border" type="text" name="Message" autocomplete="off" required>
            </div>
            <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="send_msg">Send Message</button>
         </form>
      </div>
      
      <!-- End page content -->
   </div>
   
   <?php
      include("footer.html");

      if(isset($_POST["send_msg"])) {
         echo '<script>alert("Thanks for sending us a message! We\'ll get back to you via email.")</script>';
      }
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
