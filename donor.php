<html>
<body bgcolor="#ff9999">

<?php

$conn=mysqli_connect("localhost","root","","BD");


if(mysqli_connect_errno($conn))
{
	echo "Failed to connect to MySQL :".mysqli_connect_errno();
}

$name=$_REQUEST["fname"];
$gd=$_REQUEST["gender"];
$bl=$_REQUEST["blood"];
$addr=$_REQUEST["addr"];
$em=$_REQUEST["email"];
$contact=$_REQUEST["number"];
$pass=$_REQUEST["num1"];

$sql="INSERT INTO blood (Name,Gender,Bloodgrp,Contact,Address,Email,Passwd) VALUES ('$name','$gd','$bl','$contact','$addr','$em','$pass')";

$res=mysqli_query($conn,$sql);

if($res) 
{
    echo "<h1 style='font-align:center;'>REGISTERED SUCCESSFULLY !</h1><br/><br/>";
    //echo "<a href="1a.html" style="font-size:30px; color:violet;">Lets go to the Home Page</a>";
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*
echo "Hi ".$_POST["fname"]." !<br/>";
echo "You live at ".$_POST["address"]."<br/>";
echo "Your Contact number is : ".$_POST["number"]."<br/>";
echo "Your Email-ID : ".$_POST["email"]."<br/>";
echo "Password : ".$_POST["num1"]."<br/><br/><br/>";
*/

?>

</body>
</html>