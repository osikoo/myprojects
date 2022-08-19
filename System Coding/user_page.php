<?php

@include 'config.php';

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
   <title>user page</title>

   <link rel="stylesheet" href="style.css">

</head>
<body>
<nav>

<input type="checkbox" id="check">
<label for="check" class="checkbtn">
<i class="fas fa-bars"></i>
</label>
<label class="logo">MY DOCTOR MY HEALTH</label>

<ul>
   
   <li><a href="#">Registration</a></li>
   <li><a href="#">Diagnosis</a></li>
   <li><a href="#">Doctor</a></li>
   <li><a href="#">Lab Tests</a></li>
   <li><a href="#">Pharmacy</a></li>
</ul>
</nav>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>