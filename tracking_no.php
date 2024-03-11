<?php
   include("database.php");
?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cargo Confirmation</title>
   </head>
   <body style="text-align: center; padding-top: 10%; zoom: 1.5">
      <p style="color: red; font-size: 18px">Keep this number safely you will
         need it to track your shipment</p>
      <hr> <br>
      <h2>Unique Tracking No: </h2>
   </body>
</html>
<?php
   $cargo = $_POST["Cargo"];

   $random_text = "ABBTS";
   $random_no = null;

   for ($i = 1; $i <= 5; $i++) {
      $random_no = $random_no . random_int(0, 9);
   }

   echo $random_text . "/" . $random_no . "/" . "2022_$cargo<br>";

   // Track shipments in DB
   if(isset($_POST["send"])) {
      $senderName = filter_input(INPUT_POST, "senderName", FILTER_SANITIZE_SPECIAL_CHARS);
      $receiverName = filter_input(INPUT_POST, "receiverName", FILTER_SANITIZE_SPECIAL_CHARS);
      $mobile = filter_input(INPUT_POST, "Mobile", FILTER_SANITIZE_SPECIAL_CHARS);
      $address = filter_input(INPUT_POST, "Address", FILTER_SANITIZE_SPECIAL_CHARS);
      $cargo = filter_input(INPUT_POST, "Cargo", FILTER_SANITIZE_SPECIAL_CHARS);

      $sql = "INSERT INTO shipments (sender, receiver, mobile, address, cargo)
              VALUES ('$senderName', '$receiverName', '$mobile', '$address', '$cargo')";
      
      try {
         mysqli_query($conn, $sql);
         echo '<script>alert("Order successful")</script>';
      } catch (mysqli_sql_exception) {
         echo "Order unsuccessful";
      }
   }
?>