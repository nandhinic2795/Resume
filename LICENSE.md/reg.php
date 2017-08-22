<?php
ob_start();
session_start();
$db=mysqli_connect("localhost","id2646301_nandhini","nila2795","id2646301_login");
if(isset($_POST['regbtn']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if($password==$password2)
{
	$password=md5($password);
	$sql="INSERT INTO reglog(username,email,password)VALUES('$username','$email','$password')";
	mysqli_query($db,$sql);
	echo"You are now logged in";
$_SESSION['username']=$username;
header("location:reg.php");
}
else
{
echo"The two passwords do not match";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Register,login and logout user php mysql</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="pink">
<div class="header">
<h1>Registration page</h1>
</div>
<form method="post" action="reg.php">
<table>
<tr>
<td>User Name:<td/>
<td><input type="text" name="username" class="txtInp" required></td>
</tr>
<tr>
<td>Email:<td/>
<td><input type="email" name="email" class="txtInp" required pattern="[a-z0-9]+@[a-z0-9]+.[a-z]{3}"></td>
</tr>
<tr>
<td>Password:<td/>
<td><input type="password" name="password" class="txtInp" required></td>
</tr>
<tr>
<td>Confirm Password:<td/>
<td><input type="password" name="password2" class="txtInp"required></td>
</tr>
<tr>
<td><td/>
<td><input type="submit" name="regbtn" value="Register"></td>
</tr>
<p>
Already a member?<a href="login.php">Login</a>
</p>
</table>
</form>

</body>
</html>