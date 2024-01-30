<?php
@include 'ration.php';

// Check if the form is submitted
if(isset($_POST['submit'])){

   // Retrieve form data and sanitize inputs
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $error = array(); // Initialize an empty error array to store validation errors

   // Validate required fields
   if(empty($name) || empty($email) || empty($pass) || empty($cpass)) {
      $error[] = 'Please fill in all the required fields.';
   }
   // Validate email format and name characters
   elseif(!filter_var($email,FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-zA-Z0-9]*$/",$name))
    {
      header("location: ../register_form.php?error=invalidmail&uid");
      exit();
    }

   // Validate email format
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Invalid email format.';
   }

   // Validate password and confirm password match
   if ($pass !== $cpass) {
      $error[] = 'Passwords do not match.';
   }

   // If there are any validation errors, display them
   if (count($error) > 0) {
      foreach ($error as $errorMsg) {
         echo '<span class="error-msg">' . $errorMsg . '</span>';
      }
   } else {
      // Check if the user already exists
      $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
      $result = mysqli_query($conn, $select);

      if (mysqli_num_rows($result) > 0) {
         $error[] = 'User already exists!';
      } else {
         // Insert the user into the database
         $sql = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $sql);
         header('location: login_form.php');
         exit();
      }

      // If there are any errors after checking database, display them
      if (count($error) > 0) {
         foreach ($error as $errorMsg) {
            echo '<span class="error-msg">' . $errorMsg . '</span>';
         }
      }
   }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/loginstyle.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name" value="<?php if(isset($name)) echo $name; ?>">
      <input type="email" name="email" required placeholder="enter your email" value="<?php if(isset($email)) echo $email; ?>">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">User</option>
         <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already Have An Account? <a href="login_form.php">Login Now</a></p>
   </form>

</div>

</body>
</html>
