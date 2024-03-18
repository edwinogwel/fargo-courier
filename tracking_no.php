<?php
   include("database.php");
?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Confirmation Page</title>
   </head>
   <body style="text-align: center; padding-top: 10%; zoom: 1.5">
      <p style="color: red; font-size: 18px"><bold><em>Keep this number safely you will
         need it to track your shipment</em></bold></p>
      <hr> <br>
      <h2>Unique Tracking No: </h2>
   </body>
</html>
<?php
   $cargo = $_POST["Cargo"];
   $random_text = "FARGO";
   $random_no = null;

   for ($i = 1; $i <= 5; $i++) {
      $random_no = $random_no . random_int(0, 9);
   }

   $tracking_no = $random_text . "/" . $random_no . "/" . "$cargo";

   echo $tracking_no;

   // Track shipments in DB
   if(isset($_POST["send"])) {
      $senderName = filter_input(INPUT_POST, "senderName", FILTER_SANITIZE_SPECIAL_CHARS);
      $receiverName = filter_input(INPUT_POST, "receiverName", FILTER_SANITIZE_SPECIAL_CHARS);
      $mobile = filter_input(INPUT_POST, "Mobile", FILTER_SANITIZE_SPECIAL_CHARS);
      $address = filter_input(INPUT_POST, "Address", FILTER_SANITIZE_SPECIAL_CHARS);
      $cargo = filter_input(INPUT_POST, "Cargo", FILTER_SANITIZE_SPECIAL_CHARS);

      $sql = "INSERT INTO shipments (sender, receiver, mobile, address, cargo, tracking_no)
              VALUES ('$senderName', '$receiverName', '$mobile', '$address', '$cargo', '$tracking_no')";
      
      try {
         mysqli_query($conn, $sql);
         echo '<script>alert("Order successful")</script>';
      }
      catch (mysqli_sql_exception) {
         echo "Order unsuccessful";
      }
   }
?>