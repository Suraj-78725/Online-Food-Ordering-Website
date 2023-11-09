<?php
include("connection.php")
?>
<!DOCTYPE html>
<html>
<head>
<title>FOOD ORDERING SYSTEM</title>
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="oredernow.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="icon" href="rimg/fav1.ico" type="image/ico" size="16x16">
</head>
<body>
<!-- code foe nav bar-->

<div id="menu">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="#">Meneue</a>
<ul>
<li><a href="vegthali.html">veg plate</a>
<li><a href="nonveg.html">non veg plate</a>
<li><a href="fastfood.html">fast food</a>
<li><a href="soup.html">Soup</a>
<li><a href="pasta.html">pasta</a>
</ul>
</li>
<li><a href="#">Order</a></li>
<li><a href="about.html">About</a></li>
<li><a href="login1.php">Logout</a></li>
</ul>
</div>
<!-- code foe nav bar-->
<br><br>
<br>
<br>
<h1 align="center">Enter The Order Details</h1>
<br><br>
<div>
<form action="#" method="POST">
<center>
	<table border="0" width="60%">
		<tr>
		<td  width="40%">Name</td>
		<td><input type="text" placeholder="Name" name="fname"></td>
		</tr>
		<td>Email</td>
		<td><input type="emial"placeholder="Email" name="email"></td>
		</tr>
		<td>Mobile</td>
		<td><input type="number"placeholder="Mobile NO" name="number"></td>
		</tr>
		<td>Item</td>
		<td> <a ><input type="text"placeholder="Item Name" name="item"></td>
		</tr>
		
		<td>Quantity</td>
		<td>
		<select name="quantity">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		</select>
		</td>
		</tr>
		<td>Address</td>
		<td> <input type="text"placeholder="Address" name="address"></td>
		</tr>
			<td>Submit</td>
			<td><input type="submit" value="Submit" name="submit"></td>
			</tr>
			</table>
			</center>
	</form>		
</div>
<br>
<!-- code for footer-->
<div class="footer">
<div class="footerb">
<b>Quick Link</b>
<br>
<br>
<br>
	Home<br>
	About<br>
	Menue<br>
	Order<br>
	Contact<br>
</div>
<div class="footerb">
<b>Menu</b>
<br>
<br>
<br>
	Veg Plate<br>
	Non Veg Plate<br>
	Fast Food<br>
	Pizza<br>
	Pasta<br>
</div>
<div class="footerb">
<b>Address</b>
<br>
<br>
<br>
	Address:<br>
	120, Delhi Jalandhar<br>
	Email: example@gmail.comb<br>
	MobileL: 1234567890<br>
	Time: 8.00 AM to 9.00 PM<br>
</div>
<div class="footerb">
<b>Direction</b>
<br>
<br>
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d755385.5542701909!2d73.93915098204758!3d19.0304923582409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spune%20railway%20station!5e0!3m2!1sen!2sin!4v1679225352498!5m2!1sen!2sin" width="100%" height="125" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
<!-- end of code footer-->
</body>
</html>

<?php

if($_POST['submit'])
{
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$item = $_POST['item'];
	$quantity = $_POST['quantity'];
	$address  = $_POSt['address'];
	$query= "INSERT INTO items VALUES ('$fname','$email','$number','$item','$quantity','$address')";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo"data added Successful";
		header('location:submit.html');
	}
	else
	{
		echo"Unsuceessful";
	}

}

?>

