<?php
@include 'config.php';

if(isset($_POST['add_to_cart'])){
   // Get product details from the form
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   // Check if the product is already in the cart
   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");
   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'Product already added to cart';
   }else{
      // Insert the product into the cart
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'Product added to cart successfully';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
   <link rel="stylesheet" href="css/styles.css"/>
   <script type="text/javascript">
      (function (I, L, T, i, c, k, s) {
        if (I.iticks) return;
        I.iticks = { host: c, settings: s, clientId: k, cdn: L, queue: [] };
        var h = T.head || T.documentElement;
        var e = T.createElement(i);
        var l = I.location;
        e.async = true;
        e.src = (L || c) + "/client/inject-v2.min.js";
        h.insertBefore(e, h.firstChild);
        I.iticks.call = function (a, b) {
          I.iticks.queue.push([a, b]);
        };
      })(
        window,
        "https://cdn-v1.intelliticks.com/prod/common",
        document,
        "script",
        "https://app.intelliticks.com",
        "xr43yJN8XpucPNKYF_c",
        {}
      );
    </script>

</head>
<body>
<section class="header">
      <!--hmtl for logo and nva bar -->
      <a href="#" class="logo">
        <img src="project_images/logo.png" class="LOGO" alt="LOGO" />
        <h2 class="logotext">hram Sehly</h2></a
      >
      <div>
        <!--div for nav bar creation  -->
        <ul class="navbar">
          <li><a class="active" href="public/home.php"> Home </a></li>
          <li class="dropdown">
            <a href="#" class="trigger-drop">
              Shop </a>
           
          </li>
          <li><a href="AboutUS.html">About&nbsp;Us </a></li>
          <li><a href="contactus.html">Contact </a></li>
          <li><a href="login_form.php" id="Signup">Sign&nbsp;Up </a></li>
          <!-- <li><a href="index.php">Contact</a></li> -->
          <li>
            <a href="cart.php"
              ><i class="fa-solid fa-cart-shopping fa-lg"></i
            ></a>
          </li>
        </ul>
      </div>
    </section>

<?php
// Display any messages
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
?>

<?php include 'header.php'; ?>
<div class="forBackground">
<div class="container">

<section class="products">

   <h1 class="heading">Men Section</h1>

   <div class="box-container">

      <?php
      // Retrieve products from the database
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="project_images/Men_section/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>
</div>
<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>
