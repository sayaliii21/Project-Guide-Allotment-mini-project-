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
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Password Change</title>
	<style>
	body{background-color:grey;}
	td.inset {border-style: inset;}
body {
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
.btn-warning{
	font-size:20px;
</style>
</head>
<body>

<div class="topnav">
  <a  href="home.php">Home</a>
  <?php
  $i=$_SESSION['variable'];
  if($i==3)
  {?>
  <a href="student_profile.php">Profile</a>
  <a href="domain_matching.php">Project Guide</a>
  <?php
  }
  else
  {
	  ?>
  <a href="faculty_details.php">Profile</a>
  <a href="project_mentee.php">Project Mentee</a>
	  <?php
  }
  ?>
    <a class="active" href="change_password_new.php">Change password</a>
  <div class="topnav-right">
    <a href="logout.php">Log out</a>
  </div>
</div>


     
    <center>
    <h1>Change Password</h1>
   <form method="POST" action="change_password.php">
    <table>
	  <tr>
    <td >Enter Username:</td>
    <td class="inset"><input type="text" size="10" name="username"></td>
    </tr></p>
    <tr>
    <td>Enter old password:</td>
    <td class="inset"><input type="password" size="10" name="password"></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td class="inset"><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td class="inset"><input type="password" size="10" name="cpassword"></td>
    </tr>
    </table>
     <div class="formbox">
              <button type="submit" class="signbut bolder" >Update Password</button>
            </div>
			</center>
    </form>
   </body>
    </html>  
	