<?php
session_start();
$sid=$_SESSION['username'];
$domain=$_POST['Topic'];
$project=$_POST['pro'];
$know=$_POST['knowledge'];
$con=mysqli_connect("localhost","root");
if($con)
{
	$chdb=mysqli_select_db($con,"pga");
	$sql2="select * from stud ";
	$result=mysqli_query($con,$sql2);
	$flag=0;
    while($row=mysqli_fetch_array($result))
	{
	if($row[0] == $_SESSION['username'])
	{
		$flag=1;
	}
	}
	if($flag==1)
	{
		$sqlr="update stud set domain='$domain',project='$project',knowledge='$know' where sid='$sid' ";
		if(mysqli_query($con,"$sqlr"))
        {
			$_SESSION['domain']=$domain;
		  header("location:student_profile.php");
		}		
	}
	else
	{
	$sql1="insert into stud(sid,domain,project,knowledge) values('$sid','$domain','$project','$know') ";
	if(mysqli_query($con,"$sql1"))
	{
		$_SESSION['domain']=$domain;
		header ("location:student_profile.php");
	}
	else
	{
		echo "ERROR! Try Again";
	}
	}
	
}
?> 