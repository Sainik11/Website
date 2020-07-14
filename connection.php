<html>
<title>Connection  to the Maria Db</title>
<body>
<?php
$host='localhost:3306';
$username='aman';
$password='aman';
$db_name='Php';
//$tb1_name='login';
$conn = mysqli_connect($host,$username,$password,$db_name);
//$user = $_POST['name'];
//$pass = $_POST['password'];
if(!$conn)
{
die('could not connect:'.mysqli_error($conn));
}
?>
</body>
</html>
