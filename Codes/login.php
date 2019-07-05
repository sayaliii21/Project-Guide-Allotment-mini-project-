<?php
session_start();
$a1=$_POST['Username'];
$b1=$_POST['password'];
$con=mysqli_connect("localhost","root");
if($con)
{
	$sql1=mysqli_select_db($con,"pga");

{
	$faclog= "select * from faculty_login";
	$res=mysqli_query($con,"$faclog");

		$flag=0;
while($nrow= mysqli_fetch_array($res))
{

	if($nrow[0]==$a1 && $nrow[1]==($b1))
	{	
             $_SESSION['userid']=$a1;
		$flag=1;
		break;
}
}
if($flag==1)
{	
$sql6="select * from faculty_details where id='$a1'";
if(mysqli_query($con,$sql6))
		{
		$sql5="select * from faculty_details where id='$a1'";
	if(mysqli_query($con,$sql5))
	{
		$row=mysqli_fetch_array(mysqli_query($con,$sql5));
		$_SESSION['fname']=$row[1];
		$_SESSION['mname']=$row[2];
		$_SESSION['lname']=$row[3];
		$_SESSION['dept']=$row[4];
		$_SESSION['phone']=$row[5];
		$_SESSION['email']=$row[6];
		$_SESSION['experince']=$row[7];
		$_SESSION['domain']=$row[8];
		$_SESSION['projectd']=$row[9];
		$_SESSION['moto']=$row[10];
		$_SESSION['y']=5;
		header("location:home.php");
	}
	}
	else
	{
	   header ("location:home.php");
	}
}
else{
	$sql2="select * from stud_reg ";
$result=mysqli_query($con,"$sql2");
$fg=0;
while($row = mysqli_fetch_array($result))
{
	
	if($row[0]==$a1 && $row[1]==$b1)
	{	
             $_SESSION['username']=$a1;
			 $_SESSION['fname']=$row[2];
			 $_SESSION['mname']=$row[3];
			 $_SESSION['lname']=$row[4];
			 $_SESSION['year']=$row[5];
			 $_SESSION['branch']=$row[6];
			 $_SESSION['mobile']=$row[7];
			 $_SESSION['email']=$row[8];
		$fg=1;
	}
	
}
if($fg==1)
{
$sql4="select * from stud";
$ws=mysqli_query($con,"$sql4");
if($ws)
{
	$was=mysqli_fetch_array($ws);
$_SESSION['domain']=$was[1];
$_SESSION['project_topic']=$was[2];
$_SESSION['know']=$was[3];
$_SESSION['x']=7;
	$variable=3;
	$_SESSION['variable']=$variable;
	header ("location:home.php");
}
}
else{
?>
<script>
alert("INVALID USER [USERNAME AND PASSWORD DIDN'T MATCH !]")
	location.href="index.html"
	</script>
	<?php
}
}
}
}
else
{
echo "Not Connected <br>";
}

?>
