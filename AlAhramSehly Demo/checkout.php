<?php
@include 'config.php';

// PayPal API configuration
$paypal_email = 'RintarouSehly20@gmail.com'; // Replace with your PayPal email
$paypal_currency = 'USD'; // Replace with your preferred currency

if (isset($_POST['order_btn'])) {
   // Retrieve form data
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];

   // Retrieve cart items and calculate total price
   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if (mysqli_num_rows($cart_query) > 0) {
      while ($product_item = mysqli_fetch_assoc($cart_query)) {
         $product_name[] = $product_item['name'] . ' (' . $product_item['quantity'] . ') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      }
   }

   // Format cart items and insert order details into the database
   $total_product = implode(', ', $product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');


   // Generate PayPal payment URL and redirect user
   if ($cart_query && $detail_query) {
      if ($method == "paypal") {
         $paypal_amount = number_format($price_total, 2);
         $paypal_description = 'Order Total';
         $paypal_return_url = 'http://localhost/sehly/PaypalMessages/success.php';
         $paypal_cancel_url = 'http://localhost/sehly/PaypalMessages/cancel.php';


         // Construct PayPal URL
         $paypal_url = "https://www.paypal.com/cgi-bin/webscr" .
             "?business=" . urlencode($paypal_email) .
             "&cmd=_xclick" .
             "&currency_code=" . urlencode($paypal_currency) .
             "&amount=" . urlencode($paypal_amount) .
             "&item_name=" . urlencode($paypal_description) .
             "&return=" . urlencode($paypal_return_url) .
             "&cancel_return=" . urlencode($paypal_cancel_url);

         // Redirect user to PayPal payment page
         header('Location: ' . $paypal_url);
         exit;
      } else {
         echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='products.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
      }
   }
}
?>


<!-- Rest of the HTML code remains the same -->


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<?php include 'header.php'; ?>
<div class="forBackground">
<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <!-- This line of code is responsible for displaying each product item in the cart with its corresponding quantity  -->

      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> grand total : $<?= $grand_total; ?>/- </span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>Your Name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>Your Number</span>
            <input type="number" placeholder="enter your number" name="number" required>
         </div>
         <div class="inputBox">
            <span>Your Email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>Payment Method</span>
            <select name="method">
               <option value="cash on delivery" selected>Cash On Devlivery</option>
               <option value="paypal">Paypal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Address Line 1</span>
            <input type="text" placeholder="e.g. flat no." name="flat" required>
         </div>
         <div class="inputBox">
            <span>Address Line 2</span>
            <input type="text" placeholder="e.g. street name" name="street" required>
         </div>
         <div class="inputBox">
            <span>City</span>
            <input type="text" placeholder="e.g. Cairo" name="city" required>
         </div>
         <div class="inputBox">
            <span>State</span>
            <input type="text" placeholder="e.g. Maadi" name="state" required>
         </div>
         <div class="inputBox">
            <span>Country</span>
            <input type="text" placeholder="e.g. Egypt" name="country" required>
         </div>
         <div class="inputBox">
            <span>Pin Code</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
      <a href="Wheel.html" class="Try">Try Your Luck</a>
   </form>

</section>
</div>
</div>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>