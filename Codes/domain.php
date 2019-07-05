<?php
session_start();
$con=mysqli_connect("localhost","root");
if($con)
{
	mysqli_select_db($con,"pga");
	$i1=$_SESSION['username'];
	$s1=$_SESSION['domain'];
	$sql1="select id,domain from faculty_details where domain like '$s1%'";
	$collect= mysqli_query($con,$sql1);
	if($collect)
	{
		
		while($row=mysqli_fetch_array($collect))
		{
                      
			$val=$row[0];
			$dom=$row[1];
			
			$chk=mysqli_query($con,"select * from domain_match where s_id like '$i1%'");
			$fet=mysqli_fetch_array($chk);
			if(!$fet)
			{
				$in0="insert into domain_match values('$i1','$val','$dom')";
				$in1=mysqli_query($con,$in0);
			}
			if($fet)
			{
				$up0="update domain_match set fac_id='$val' where s_id like '$i1%'";
				$up=mysqli_query($con,$up0);
			}
			else
			 {
				 ?>
				 <script>
				 alert ("No Faculty avaiable with selected domain , please choose another domain")
				 location.href="student_profile.php"
				 </script>
				 <?php
			 }
			break;
		}
		
	}
}
		?>
	
<html>
<head>
<style>

body {
	background-color:grey;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}

</style>
<style>
table, th, td {
    border: 1px solid black;
	border-collapse:collapse;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="home.php">Home</a>
  <a href="student_profile.php">Profile</a>
  <a class="active"href="domain_matching.php">Project Guide</a>
    <a href="change_password_new.php">Change password</a>
  <div class="topnav-right">
    <a href="logout.php">Log out</a>
  </div>
  </div>
  <div>
<center><h1 style="color:white">YOUR PROJECT GUIDE </h1></center></div>
<center>
<table style="background-color:white" width="800" height="400">
<tr>
<th colspan="2" style="color:green">STUDENT</th>
<th colspan="2" style="color:green">GUIDE</th>
</tr>
<tr>
<th>Student Id</th>
<th>Student Name</th>
<th>Faculty Id</th>
<th>Faculty Name</th>
</tr>
<tr>
<td><?php 
$id1=$_SESSION['username'];
echo "$id1";
 ?> </td>
<td><?php
$id2=$_SESSION['username'];
$a2="select fname,lname from stud_reg where moodle_id='$id2'";
$c3=mysqli_query($con,$a2);
if($c3)
{
$bal3=mysqli_fetch_array($c3);
$fn1=$bal3[0];
$ln1=$bal3[1];
echo "$fn1";
echo "$ln1";
}
 ?> </td>
<td><?php
$id3=$_SESSION['username'];
$a1="select fac_id from domain_match where S_id='$id3'";
$c1=mysqli_query($con,$a1);
if($c1)
{
$bal1=mysqli_fetch_array($c1);
$ans1=$bal1[0];
echo "$ans1";
}
 ?> </td>
<td> <?php
$id4=$_SESSION['username'];
$p="select f.fname,f.lname from faculty_details f  inner join domain_match d on f.id=d.fac_id where d.s_id='$id4'";
$o=mysqli_query($con,$p);
if($o)
{
$reg=mysqli_fetch_array($o);
$fn=$reg[0];
$ln=$reg[1];
echo "$fn";
echo"$ln";
}
 ?> </td>
</tr>
</table>
</center>
</body>
</html>

	
	
	
	