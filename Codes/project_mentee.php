<?php 
session_start();
$con=mysqli_connect("localhost","root");
if($con)
{
	mysqli_select_db($con,"pga");
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
  <a href="faculty_details.php">Profile</a>
  <a class="active"href="project_mentee.php">Project Mentee</a>
    <a href="change_password_new.php">Change password</a>
  <div class="topnav-right">
    <a href="logout.php">Log out</a>
  </div>
  </div>
  <div>
<center><h1 style="color:white">YOUR MENTEE </h1></center></div>
<center>
<table style="background-color:white" width="800" height="400">
<tr>
<th colspan="2" style="color:green">GUIDE</th>
<th colspan="2" style="color:green">STUDENT</th>
</tr>
<tr>
<th>Faculty Id</th>
<th>Faculty Name</th>
<th>Student Id</th>
<th>Student Name</th>
</tr>
<tr>
<td><?php 
$id1=$_SESSION['userid'];
echo "$id1";
 ?> </td>
<td><?php
$id2=$_SESSION['userid'];
$a2="select fname,lname from faculty_details where id ='$id2' ";
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
$id3=$_SESSION['userid'];
$a1="select s.moodle_id from stud_reg s inner join domain_match d on s.moodle_id=d.s_id where fac_id='$id3'";
$c1=mysqli_query($con,$a1);
if($c1)
{
while($bal1=mysqli_fetch_array($c1))
{
$ans1=$bal1[0];
echo "$ans1";?> <br>
<?php
}
}
 ?> </td>
<td> <?php
$id4=$_SESSION['userid'];
$p="select s.fname,s.lname from stud_reg s inner join domain_match d on s.moodle_id=d.s_id where d.fac_id='$id4'";
$o=mysqli_query($con,$p);
if($o)
{
while($reg=mysqli_fetch_array($o))
{
$fn=$reg[0];
$ln=$reg[1];
echo "$fn";
echo"$ln";?> <br>
<?php
}
}
 ?> </td>
</tr>
</table>
</center>
</body>
</html>
