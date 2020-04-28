<html>
<body>

<?php

$conn=mysqli_connect("localhost","root","","regg");


if(mysqli_connect_errno($conn))
{
	echo "Failed to connect to MySQL :".mysqli_connect_errno();
}

$name=$_REQUEST["name"];
$pass=$_REQUEST["pass"];

$sql="SELECT Name from Reci where Name='$name' AND Passwd='$pass'";

$res=mysqli_query($conn,$sql);

if($res->num_rows>0)
{
	echo "<table border='5px' cellspacing='5' cellpadding='5' align='center'>
		<tr><th>Name</th>
		<th>Contact</th>
}

$conn->close();

?>

</body>
</html>
