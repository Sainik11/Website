<html>
<title>Connection to the Maria Db</title>
<body>
<?php
include'connection.php';
$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Style = $_POST['style'];
$Email_Id= $_POST['email'];
$Phone = $_POST['phone'];
$Password = $_POST['password'];
$Password1 = $_POST['password1'];

if(empty($Firstname) && empty($Lastname) && empty($Style) && empty($Email_id) && empty($Phone) && empty($Password) && empty($Password1))
{
	echo'<script>alert("Every field is madiatory to fill")</script>';
}
else if($Password != $Password1)
{
	echo'<script>alert("Password should be same")</script>';
}
else
{
$sql="INSERT INTO registration VALUES('$Firstname','$Lastname','$Style','$Email_Id','$Phone','$Password','$Password1')";
if(mysqli_query($conn,$sql))
{
	echo"Registred Successfully <br>";
?>
<a href="login.html"> Go To The Login Page</a><br>
<?php
}
else
{
	echo"Try again";
}
$sql1="INSERT INTO login VALUES('$Firstname','$Password1')";
mysqli_query($conn,$sql1);
}
?>
</body>
</html>
