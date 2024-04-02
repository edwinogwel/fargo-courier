<?php
   include("database.php");
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>
   <link rel="stylesheet" href="css/checkout.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
   <style>
      body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
   </style>
</head>
<body>
   <section class="component">
      <div class="total">
        <h3>TOTAL</h3>
        <p>$ 109</p>
      </div>
      <div class="credit-card">
        <h2>Credit card</h2>
        <form action="expressCheckout.php" method="post">
            <input type="text" name="name" placeholder="NAME" autocomplete="off" required/>
            <div class="line">
               <input type="text" name="Q1" placeholder="CARD" autocomplete="off" required/>
               <input type="text" name="Q2" placeholder="NUMBER" autocomplete="off" required/>
               <input type="text" name="Q3" autocomplete="off" required/>
               <input type="text" name="Q4" autocomplete="off" required/>
            </div>
            <div class="line">
               <input class="litle" name="expiry" type="text" placeholder="EXPIRY" autocomplete="off" required/>
               <input class="tall" name="cvv" type="text" placeholder="CCV" autocomplete="off"/>
            </div>
          <button type="submit" class="valid-button" name="checkout">PROCEED TO CHECKOUT</button>
        </form>
      </div>
   </section>
</body>
</html>
<?php
   if(isset($_POST['checkout'])) {
      if(isset($_POST['checkout'])) {
         $name = $_POST["name"];
         $card_no = $_POST["Q1"]. $_POST["Q2"]. $_POST["Q3"]. $_POST["Q4"];
         $expiry = $_POST["expiry"];
         $hashed_cvv = password_hash($_POST["cvv"], PASSWORD_DEFAULT);
   
         $sql = "INSERT INTO express_subscribers (name, card, expiry, cvv)
                 VALUES ('$name', '$card_no', '$expiry', '$hashed_cvv')";
   
         try {
            mysqli_query($conn, $sql);
            echo '<script>alert("Card Added ✔️")</script>';
         } catch (mysqli_sql_exception) {
            echo '<script>alert("Card Not Added ❌")</script>';
         }
      }
   }
?>
<?php
   mysqli_close($conn);
?>