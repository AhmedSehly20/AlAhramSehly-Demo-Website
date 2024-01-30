<?php

@include 'ration.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/loginstyle.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>User</span></h3>
      <!-- Display the user's name from the session -->
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1> 
      <p>This is an User Account</p>
      <a href="login_form.php" class="btn">Login</a>
      <a href="products.php" class="btn">Go Shopping Now!</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>

</div>
</body>
</html>