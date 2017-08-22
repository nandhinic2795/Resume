<?php
ob_start();
session_start();
$db=mysqli_connect("localhost","id2646301_nandhini","nila2795","id2646301_login");
if(isset($_POST['logbtn']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);
$result=mysqli_query($db,"select * from reglog where username='$username' and password='$password'")
             or die("Failed to query database".mysqli_error($db));
if(mysqli_num_rows($result)==1)
{
	$_SESSION['username']=$username;
	echo "You are now logged in";
	header("location:resume.php");
}
else{
	echo"Username/password combination incorrect";
}
}
?>
	
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="pink">
<div class="header">
<h1>Login Page</h1>
</div>
<form method="post" action="login.php">
<table>
<tr>
<td>User Name:<td/>
<td><input type="text" name="username" class="txtInp"></td>
</tr>
<tr>
<td>Password:<td/>
<td><input type="password" name="password" class="txtInp"></td>
</tr>
</tr>
<tr>
<td><td/>
<td><input type="submit" name="logbtn" value="Login"></td>
</tr>
<p>
Not yet a member?<a href="reg.php">Register</a>
</p>
</table>
</form>

</body>
</html>