<?php
ob_start();
session_start();
if(isset($_SESSION['username']))
{
?>
<html>
<head>
<title>Resume</title>
</head>
<body bgcolor="pink">
<div class="header">
</div>
<form method="get" action="resume.php">
<center><h1><u>Your Resume</u><h1></center>
<h3>Nandhini C<br/>
nandhinics2795@gmail.com<br/>
8219829272</h3>
<hr>
<h2><u>CAREER OBJECTIVE:</u>
</h2>
<h4>To succeed in an environment of growth and excellence and earn a job 
    which provides me job satisfaction and self development  <br/>
	and help me achieve personal as well as organization goals.</h4>
<h2><u>ACADEMIC QUALIFICATION:</u>
<table border=3 width=1000>
<tr>
    <th>Qualification</th>
	<th>Board/University</th>
	<th>School/College</th>
	<th>Year of passing</th>
    <th>Percentage</th>
</tr>
<tr>
     <th>MCA</th>
	 <th>Anna University</th>
	 <th>SA College</th>
	 <th>2018</th>
	 <th>8.43</th>
</tr>
<tr>
     <th>BSC[CS]</th>
	 <th>University of Madras</th>
	 <th>KCS kasi nadar College</th>
	 <th>2016</th>
	 <th>82%</th>
</tr>
<tr>
     <th>HSC</th>
	 <th>StateBoard</th>
	 <th>MDGHS</th>
	 <th>2013</th>
	 <th>75%</th>
</tr>
<tr>
     <th>SSLC</th>
	 <th>StateBoard</th>
	 <th>MDGHS</th>
	 <th>2011</th>
	 <th>92%</th>
</tr>	 
</table>
<h2><u>
COMPUTER SKILLS</u></h2>
Front end      :HTML5,PHP <br/>
Web development:Javascript <br/>
Database       :MS Access,MySQL <br/>
Language Known :C,C++ and java <br/>
<h2><u>
VOCATIONAL TRAINING</u></h2>
Participate in Workshop on Android<br/>
Attended an inplant training<br/>
<h2><u>
AREA OF INTEREST</u></h2>
Java<br/>
Web Designing <br/>
<h2><u>
PERSONALITY SKILLS</u></h2>
Good Learner and observer<br/>
Sincere and Hard Worker <br/>
<h2><u>
PERSONAL PARTICULARS</u></h2>
Date of Birth  :27/10/1995<br/>
Fathers Name   :Chandrasekar <br/>
Language Known :Tamil,English<br/>
Hobbies        :Dancing<br/>    
<center>
<input type="submit" value="Logout" name="logoutbtn"></center>
</form>
</body>
</html>
<?php
}
else if(!isset($_SESSION['username']))
{
	header("location:home.php");
}
if(isset($_GET['logoutbtn']))
{
	session_unset();
	session_destroy();
	echo"You have been logged out";
    header("location:home.php");
}
?>