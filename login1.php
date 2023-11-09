<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE
</title>
<link rel="stylesheet" type="text/css" href="logo.css">
</head>
<body>
<section>
<div class="login-box">
	<form action="#" method="POST">
	<h2>Login</h2>
	<div class="input-box">
	<span class="icon"><ion-icon name="mail"></ion-icon></span>
	<input type="email"  name="username"  required></input>
	<label>Email</label>
	</div>
	<div class="input-box">
	<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
	<input type="password" name="password" required></input>
	<label>Password</label>
	</div>
	<div class="remember-forgot">
	<label><input type="checkbox">Remember me</label>
	<a href="#" >Forgot Password</a>
	</div>
    <input type="submit" name="login" class="content">
	<div class="Register-link">
	<p>Don't have an account?<a href="regist1.php">Register</a></p>
	</div>
	
	</div>
	</form>
</div>
</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
<?php
include("connection.php");
if ($_POST['login'])
{
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $query = "SELECT * FROM user WHERE email = '$username' && password = '$pass' ";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);

  if($total == 1)
  {
	// echo "login successful";
	 header('location:index.html');
  }
  else{
	echo "login unsuccessful";
  }
}
?>


</html>
