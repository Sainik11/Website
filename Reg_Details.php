<html>
<head>
<title> Registration Details</title>
</head>
<body>
<h1> Registration Details</h1>
<?php
include 'connection.php';
$sql="select *from registration";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($rows=mysqli_fetch_assoc($result))
	{
		echo "------------------------------------------------------------- <br>";
		echo "Name: " .$rows['FirstName'];
		echo $rows['Lastname']."<br>";
		echo "Style: ". $rows['Style']."<br>";
		echo "Email_Id: ". $rows['Email_Id']."<br>";
		echo "Phone: ". $rows['Phone']. "<br>";
		echo "Password: ". $rows['Password']. "<br>";
	}
}
?>
</body>
</html>
