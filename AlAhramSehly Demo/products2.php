<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
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
              Shop <i class="bx bx-chevron-down"></i
            ></a>
            <ul class="drop">
              <li><a href="products.php">Men Section</a></li>
              <li><a href="products2.php">Woman Section</a></li>
              <li><a href="products3.php">Accessories</a></li>
            </ul>
          </li>
          <li><a href="AboutUS.html">About&nbsp;Us </a></li>
          <li><a href="Contact.html">Contact </a></li>
          <li><a href="login_form.php" id="Signup">Sign&nbsp;Up </a></li>
          <!-- <li><a href="index.php">Contact</a></li> -->
          <li>
            <a href="cart.html"
              ><i class="fa-solid fa-cart-shopping fa-lg"></i
            ></a>
          </li>
        </ul>
      </div>
    </section>
   
<?php

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

   <h1 class="heading">Perfumes</h1>

   <div class="box-container">

      <?php
      
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
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</ 