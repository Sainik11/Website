<html>
<head>
<title>Welcome you successfully Login</title>
<link rel="stylesheet" type="text/css" href="aft_login.css">
</head>
<body>

<?php
include'connection.php';
$user = $_POST['name'];
$pass = $_POST['password'];
if(empty($user) && empty($pass))
{
	echo'<script type="text/javascript">';
	echo'alert("Field shuld not be empty")';
	echo'</script>';
}
else
{
$sql="select *from login where name='$user' and password='$pass'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result))
{
	$sql1="select *from registration";
	$result1= mysqli_query($conn,$sql1);

	if(mysqli_num_rows($result1) > 0)
	{
		while($rows=mysqli_fetch_assoc($result1))
		{
			//echo "Name: ".$rows['FirstName']."<br>";
		}
	}
}
?>
<p style = "background-color: black;"></p>
<div class="box">
<div class="imgBox">
<img src="hrithik-roshan_1-1.jpg" width="180px" height="180px">
</div>
<div class="content">
<h2>Aman Rathore<br><span>Style:- Krump</span><h2>
</div>
</div>

<div class="box">
<div class="imgBox">
<img src="hrithik-roshan_1-1.jpg" width="180px" height="180px">
</div>
<div class="content">
<h2>Rahul Rathore<br><span>Style:- Krump</span></h2>
</div>
</div>

<div class="box">
<div class="imgBox">
<img src="a1.jpeg" width="180px" height="180px">
</div>
<div class="content">
<h2>Abhishek Dhapte<br><span>Style:- All Style</span></h2>
</div>
</div>
<div class="box">
<div class="imgBox">
<img src="a1.jpeg" width="180px" height="180px">
</div>
<div class="content">
<h2>Omkar Dhomse<br><span>Style:- House</span></h2>
</div>
</div>
<?php
}
else if($user=='aman' && $pass=='ride4respect')
{
$sql2="select *from SuperUser where name='$user' and password='$pass'";
$result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2) > 0)
{
	while($rows=mysqli_fetch_assoc($result2))
	{
		#<a href="Reg_Details.php">Click here for all registration details</a>
		echo 'You are the SuperUser <br>';
?>
		<a href="Reg_Details.php">Click here for all the Registration</a>
<?php	
	}
	#<a style="align:left;"href="Reg_Details.php">Click here for all the Registration details</a>
}
}
else
{
	echo"Wrong Password";
}
}
?>
</body>
</html>
