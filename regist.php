<?php 
include("connection.php");
?>
session_start();
<!DOCTYPE html>
<html>
<head>
<title>REgistartion page</title>
<link rel="stylesheet" type="text/css" href="regist.css">
 
<style>
h1{
color:white;
}
td
{
color:black;
text:bold;
}
</style>
</head>
<body>
<div id="logo">
<br>
<br>
<br>
<h1 align="center">REGISTARTION FORM</h1>
<form>
<center>
	<table border="0" width="38%">
		<tr>
		<td  width="30%">First Name</td>
		<td><input type="text" name="fname" placeholder="First Name"></td>
		</tr>
		<td>Last Name</td>
		<td><input type="text" placeholder="Last Name" name="lname"></td>
		</tr>
		<td>Email</td>
		<td><input type="emial"placeholder="Email" name="email"></td>
		</tr>
		<td>Mobile</td>
		<td><input type="text" name="phone" placeholder="Mobile NO" pattern="[1-9]{1}[0-9]{9}" maxlength="10"></td>
		</tr>
		<td>Password</td>
		<td><input type="Password" name="password"placeholder=""></td>
		</tr>
		<td>Confirm Password</td>	
		<td><input type="Password" name="cpassword"placeholder=""></td>
		</tr>
		</table>
	    <div class="bn">
	   <input type="button" name="sub" value="submit">
	    </div>
	    </center>
	</form>
</div>
</body>
</html>

<?php

      if($_POST['sub'])
	  {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		$query = "INSERT INTO user VALUES('$fname','$lname','$email','$phone','$password','$cpassword')";

		$data = mysqli_query($conn,$query);
		 if($data)
		 {
			echo "Registration Successful";
			header('location:index.html');
		 }
		 else{
			echo "registration unSccessful";
		 }
	  }
?>