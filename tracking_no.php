<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cargo Confirmation</title>
   </head>
   <body style="text-align: center; padding-top: 10%; zoom: 1.5">
      <p style="color: red;">Keep this number safely you will need it to track your shipment</p>
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

   echo $random_text . "/" . $random_no . "/" . "2022_$cargo";
?>