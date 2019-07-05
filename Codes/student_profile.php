<?php
session_start();
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title>Profile</title>
		<meta name="viewport" content="width=device-width">
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		
		


<style>
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
.topnav b {
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
</head>

<body>
<form action="stud.php" method="post">
<div class="topnav">
  <b><?php echo "Hello!" ?> <?php echo $_SESSION['fname']; ?></b>
  <a  class="active" href="student_profile.php">Profile</a>
   <a  href="domain.php">Project Guide</a>
    <a href="change_password_new.html">Change password</a>
  <div class="topnav-right">
    <a href="logout.php">Log out</a>
  </div>
</div> 
</form>
<form  action="stud.php"  method="post" > 
<div class="col-sm-8"><h3>Student Details</h3></div>	
				<div class="activity-display">
				</div>
				<hr>
				<div>
				<div class="row">
					<div class="form-group">
		  				<label class="col-sm-4 control-label" >Moodle Id:</label>  
						<?php echo $_SESSION['username'] ?>	 
		  				</div>
				</div>
				</div>
				<hr>
					<div class="row">
		    				<div class="form-group">
		  					<label class="col-sm-4 control-label" >Student Name :</label>  
							<?php
                            echo $_SESSION['fname'] ?>
						    <?php echo $_SESSION['mname'] ?>
							<?php
                            echo $_SESSION['lname'] 
							?>
		  					</div>
						</div>
					<hr>

				<div class="row">
					<div class="form-group">
						<label class="col-sm-4 control-label" >Year :</label> 						
						<?php  echo $_SESSION['year'] ?>
					</div>
				</div><hr>
			
				<div class="row">
					<div class="form-group">
						<label class="col-sm-4 control-label" >Branch :</label> 
						<?php  echo $_SESSION['branch'] ?>
					</div>
				</div><hr>		
				<div class="row">			       
					<div class="form-group">
						<label class="col-sm-4 control-label">Contact Number :</label>  
						<?php echo $_SESSION['mobile'] ?>
					</div>
				</div>
				<hr>

				<div class="row">			
					<div class="form-group">
					  	<label class="col-sm-4 control-label">E-Mail :
						</label> 
                           <?php echo $_SESSION['email'] ?>						
					</div>
				</div>
				<hr>
<div class="row">					
					<div class="form-group">
						<label class="col-sm-4 control-label">Domain of Interest :</label>  
						<div class="col-sm-4">		
						  	<select name="Topic" class="form-control selectpicker">	
			      					<option value="" required>DOMAIN</option>	
								<option >Artificial Intelligence</option>
			      					<option >Cloud Computing</option>
			      					<option >Network Security</option>
								<option >Web Mining</option>
								<option >Neural Networks</option>
								<option >Image Processing</option>
			      					<option >Database Security</option>
			      					<option ></option>
							</select>					  
						</div>
					</div>
				</div>
				<hr>
				<hr>
<div class="row">			
					<div class="form-group">
						<label class="col-sm-4 control-label">Project Topic :</label>  
						<div class="col-sm-4">				
						  	<textarea class="form-control" type="text" name="pro" placeholder="Interested Project topic"></textarea>	
						</div>
					</div>
				</div>
				<hr>
<div class="row">			
					<div class="form-group">
						<label class="col-sm-4 control-label">Knowledge :</label>  
						<div class="col-sm-4">				
						  	<textarea class="form-control" type="text" name="knowledge" placeholder="Prior Knowledge about the topic(if any) "></textarea>	
						</div>
					</div>
				</div>
				<hr>

	<div class="row">
					<div class="col-md-12">
						<center><button type="submit" name="submit" class="btn btn-warning" >Save Data</button>&nbsp; &nbsp; 
						<button onclick="location.href='domain.php'" type="button" name="next" class="btn btn-warning" >Next</button></center>
					</div>
				</div>
			</div>
		</div>
		</form>
</body>
</html>

