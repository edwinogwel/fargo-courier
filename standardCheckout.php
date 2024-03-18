<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>
   <link rel="stylesheet" href="css/checkout.css">
</head>
<body>
   <section class="component">
      <div class="total">
        <h3>TOTAL</h3>
        <p>$ 69</p>
      </div>
      <div class="credit-card">
        <h2>Credit card</h2>
        <form action="standardCheckout.php" method="post">
          <input type="text" placeholder="NAME" />
          <div class="line"><input type="text" placeholder="CARD" /> <input type="text" placeholder="NUMBER" /> <input type="text" /> <input type="text" /></div>
          <div class="line">
            <input class="litle" type="text" placeholder="EXPIRY" />
            <input class="tall" type="text" placeholder="CCV" />
          </div>
          <button type="submit" class="valid-button" name="checkout">PROCEED TO CHECKOUT</button>
        </form>
      </div>
   </section>
</body>
</html>
<?php
   if(isset($_POST['checkout'])) {
      echo '<script>alert("Card Added Successful")</script>';
   }
?>