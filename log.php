<html>
<body bgcolor="#ff9999">


<?php

$conn=mysqli_connect("localhost","root","","bd");


if(mysqli_connect_errno($conn))
{
	echo "Failed to connect to MySQL :".mysqli_connect_errno();
}

$name=$_REQUEST["name"];
$pass=$_REQUEST["num1"];

$sql="SELECT * from blood where Name='$name' AND Passwd='$pass'";

$res=mysqli_query($conn,$sql);

if ($res->num_rows > 0) {
    // output data of each row
    echo "<h1>WELCOME</h1>".$name."<br/><br/>";
    echo "<img src='giphy.gif'>";
    }
else
{
    echo "INVALID";
}

$conn->close();

?>

</body>
</html>
