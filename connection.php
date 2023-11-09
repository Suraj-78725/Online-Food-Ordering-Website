<?php
// error_reporting(0);
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "regist";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
   // echo "connection Successful";
}
else
{
    echo "connection failed "  .mysqli_connect_error();
}
?>