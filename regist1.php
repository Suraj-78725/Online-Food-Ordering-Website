<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IF=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" type="text/css" href="regist1.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Registration Form</title>
    </head>
<body>
    <div class="container">
    <center><h1>Registration Form</h1></center><br>
        <form action="#" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="fname" placeholder="Full Name"  required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lname" placeholder="Last Name"  required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="mobile"  required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password"  required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password"  required>
            </div>
            <div class="form-group">
                <input type="submit"class="btn btn-primary" value="register" name="submit">
            </div>
        </form>
    </div> 
</body>
</html>

<?php

      if($_POST['submit'])
	  {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		$query = "INSERT INTO user VALUES('$fname','$lname','$email','$phone','$password','$cpassword')";

		$data = mysqli_query($conn, $query);

		 if($data)
		 {
			 echo "Registration Successful";
			header('location:login1.php');
		 }
		 else{
			echo "registration unSccessful";
		 }
	  }
?>