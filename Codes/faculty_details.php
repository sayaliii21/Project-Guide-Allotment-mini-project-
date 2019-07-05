<?php 
session_start();
?>
<html>
<head><title>Faculty DATA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title>Profile</title>
		<meta name="viewport" content="width=device-width">
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script  src="rest.js"></script>
		<link rel="stylesheet" href="rest.css">


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

<div class="topnav">
  <b><?php echo "Hello!" ?> </b>
  <a href="home.php" >Home</a>
  <a class="active" href="faculty_details_new.php">Profile</a>
   <a href="project_mentee.php">Project Mentee</a>
    <a href="change_password_new.php">Change password</a>
  <div class="topnav-right">
    <a href="logout.php">Log out</a>
  </div>
</div>
<div class="col-sm-8"><h3>Faculty Details</h3></div>
      				</div>
    			</nav>


						<form  action="faculty_profile.php"  method="post" > 
				<div class="activity-display">
				<div class="row">
					<div class="form-group">
		  				<label class="col-sm-4 control-label" name="userid">UserID: </label> 
                          <?php echo $_SESSION['userid'] ?>				
		  				<div class="col-sm-8">
		  					
		  				</div>
					</div>
				</div>
				<hr>

					<div class="row">
		    				<div class="form-group">
		  					<label class="col-sm-4 control-label">Faculty Name :</label>  
		  					<div class="col-sm-4">
		  						<input class="inputbody in1" type="text" name="fname" value="" placeholder="FIRST Name" id="user_input" id="display">
                                <input class="inputbody in1" type="text" name="mname" value="" placeholder="MIDDLE NAME">			
                                <input class="inputbody in1" type="text" name="lname" value="" placeholder="LAST NAME ">								
								<span class="error">*</span>
		  					</div>
						</div>
					</div>
					<hr>


			
				<div class="row">
					<div class="form-group">
						<label class="col-sm-4 control-label" >Department :</label> 
						<div class="col-sm-4 ">
							   <select name="department" class="form-control selectpicker">	
			      					<option value="" required>Department</option>	
								<option >CIVIL</option>
                                  <option >IT</option>
			      					<option >COMP</option>
			      					<option >EXTC</option>
								<option >MECH</option>
								</select>
								
				</div>
					</div>
				</div><hr>
						
				<div class="row">			       
					<div class="form-group">
						<label class="col-sm-4 control-label">Contact Number :</label>  
					    	<div class="col-sm-4">
						  	  <input class="form-control" type="text" pattern="[0-9]{10}" name="contact" value="" >
						</div>
					</div>
				</div>
				<hr>

				<div class="row">			
					<div class="form-group">
					  	<label class="col-sm-4 control-label">E-Mail</label>  
					    	<div class="col-sm-4">
							 <input class="form-control" type="email" name="email" placeholder="EG.:abc@gmail.com" value="">
					  	</div>
					</div>
				</div>
				<hr>      
			
				<div class="row">
					<div class="form-group">
						<label class="col-sm-4 control-label" >Year of Experince :</label> 
						<div class="col-sm-4 ">
							   <div class="col-sm-4">
						  	  <input class="form-control" type="number" size="4" name="year" value="" >
						</div>
						</div>
					</div>
				</div><hr>
                    
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
				
				
				
				
				
<div class="row">			
					<div class="form-group">
						<label class="col-sm-4 control-label"> Projects Done: </label>  
						<div class="col-sm-4">				
						  	<textarea class="form-control" type="text" name="address" placeholder=" List of projects you have Completed"></textarea>	
						</div>
					</div>
				</div>
				<hr>
				
							
<div class="row">			
					<div class="form-group">
						<label class="col-sm-4 control-label">Your Moto :</label>  
						<div class="col-sm-4">				
						  	<textarea class="form-control" type="text" name="moto" placeholder="MOTO/Vision"></textarea>	
						</div>
					</div>
				</div>
				<hr>


	<div class="row">
					<div class="col-md-12">
						<center><button type="submit" name="submit" onclick="faculty_details_new.php" class="btn btn-warning" >Save Data</button>&nbsp; &nbsp; 
						<button onclick="project_mentee.php" type="button" name="next" class="btn btn-warning" >Next</button></center>
					</div>
				</div>





			</div>
		</div>
		</form>
</body>
</html>

