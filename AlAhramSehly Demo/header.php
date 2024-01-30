<header class="header">
 <!-- <link rel="stylsheet" href="css/style.css"/> -->
   <div class="flex">

      <a href="public/home.php" class="logo">Return To Home</a>

      <nav class="navbar">
         <?php
         if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin') {
            // Show the "add products" link only for admins
            echo '<a href="admin.php">add products</a>';
            echo '<a href="admin.php">add products</a>';
         }
         ?>
         <a href="products.php">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart :<span><?php echo $row_count; ?></span> </a>   

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>