<?php
session_start();
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$id=$_POST['mid'];
$year=$_POST['semester'];
$branch=$_POST['branch'];
$mobile=$_POST['mo'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$cpwd=$_POST['conf'];
if($pwd!=$cpwd )
{
	?>
	<script>
	alert("PASSWORDS DIDN'T MATCH")
	location.href="index.html"
	</script>
	<?php
}
else
{
$con=mysqli_connect("localhost","root");
if($con)
{
	mysqli_select_db($con,"pga");
$sql2="insert into stud_reg(moodle_id,password,fname,mname,lname,year,branch,phone,email) values('$id','$pwd','$fname','$mname','$lname','$year','$branch','$mobile','$email')";
if(mysqli_query($con,$sql2))
{
	$_SESSION['username']=$id;
	$_SESSION['fname']=$fname;
	$_SESSION['mname']=$mname;
	$_SESSION['lname']=$lname;
	$_SESSION['year']=$year;
	$_SESSION['branch']=$branch;
	$_SESSION['mobile']=$mobile;
	$_SESSION['email']=$email;
	$_SESSION['variable']=3;
	$_SESSION['x']=9;
	header ("location:home.php");
}
else
{
	echo "Student Id already present";
	header("location:index.html");
}
}
else
{
	echo "Not Connected to Server";
}
}
?>

