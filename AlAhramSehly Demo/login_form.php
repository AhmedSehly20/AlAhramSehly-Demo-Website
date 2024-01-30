<?php
@include 'ration.php';

session_start();

if(isset($_POST['submit'])){
   // Retrieve the form data
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   // Select user from the database based on email and password
   $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      // User exists
      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){
         // If the user is an admin, set admin session and redirect to admin page
         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');
      }elseif($row['user_type'] == 'user'){
         // If the user is a regular user, set user session and redirect to user page
         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');
      }
   }else{
      // User not found, display error message
      $error[] = 'Incorrect email or password!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/loginstyle.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" calss="form-form">
      <h3>Login Now</h3>
      <?php
      if(isset($error)){
         // Display any error messages
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Login Now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register Now</a></p>
   </form>

</div>

</body>
</html>
