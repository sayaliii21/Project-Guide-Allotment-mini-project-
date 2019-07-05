<?php
session_start();
$id=$_SESSION['userid'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$dept=$_POST['department'];
$phone=$_POST['contact'];
$email=$_POST['email'];
$year=$_POST['year'];
$domain=$_POST['Topic'];
$projectd=$_POST['address'];
$moto=$_POST['moto'];
$con=mysqli_connect("localhost","root");
if($con)
{
	$chdb=mysqli_select_db($con,"pga");
	$sql2="select * from faculty_details ";
	$result=mysqli_query($con,$sql2);
	$flag=0;
    while($row=mysqli_fetch_array($result))
	{
	if($row[0] == $_SESSION['userid'])
	{
		$flag=1;
	}
	}
	if($flag==1)
	{
		echo "in update if ";
	$sql1="update faculty_details set fname='$fname',mname='$mname',lname='$lname',dept='$dept',phone='$phone',email='$email',experince='$year',domain='$domain',projectd='$projectd',moto='$moto' where id='$id' ";
	if($result=mysqli_query($con,$sql1))
	{
		$_SESSION['fname']=$fname;
		$_SESSION['mname']=$mname;
		$_SESSION['lname']=$lname;
		$_SESSION['fdomain']=$domain;
		header ("location:faculty_details.php");
	}
	else
	{
		echo "ERROR! Try Again";
	}
	}
     else
	{
		$new="insert into faculty_details values('$id','$fname','$mname','$lname','$dept','$phone','$email','$year','$domain','$projectd','$moto')";
		$value= mysqli_query($con,"$new");
		if($value)
		{
			$_SESSION['fdomain']=$domain;
			header("location:home.php");
		}
	}
}
?>