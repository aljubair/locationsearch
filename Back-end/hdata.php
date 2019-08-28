<!DOCTYPE html>
<html>

<head>
	<title>Admin panel-hospital</title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>

	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-static-top">
 
			
			  <div class="navbar-header">
                 <a class="navbar-brand" href="#">Location Search</a>
             </div>
			<ul class="nav navbar-nav navbar-right">
			  <li style="margin-right:15px;"><a href="#"><span class="glyphicon glyphicon-off"></span></a></li>
				
			</ul>
  
		</nav>
		<div class="row">
			<div class="col-md-2">
				  <ul class="nav nav-pills nav-stacked" style="margin-top:-10Px;">
				  <li ><a href="admin.php">Add Data</a></li>
					<li class="active"><a href="hdata.php">Hospital</a></li>
					<li><a href="htdata.php">Hotel</a></li>
				    <li><a href="rest.php">Restaurant</a></li>
					<li><a href="shop.php">Shopping Mall</a></li>
					<li><a href="tourist.php">Tourist Place</a></li>
					
				  
				  </ul>
			</div>
			
			<form action="insert_hdata_query.php" method="post" enctype="multipart/form-data">
			
						<div class="form-group">
						                
								<center><h2> Hospital</h2></center>
								</br>
								
								<label class="col-sm-1" for="ccell"><b>Hospital ID</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="croadnumber" name="hid" placeholder="Enter Hospital ID" ></br></input>
								</div>
								
								
								<label class="col-sm-1" for="ccell"><b>Doctor Name</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="croadnumber" name="dr_name" placeholder="Enter doctor name" ></br></input>
								</div>
								
								
								<label class="col-sm-1" for="ccell"><b>Category</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="croadnumber" name="category" placeholder="Enter Category" ></br></input>
								</div>
								
								
								<label class="col-sm-1" for="ccell"><b>Time</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="croadnumber" name="time" placeholder="Enter Time" ></br></input>
								</div>
								
								</br>
						 </div>
						
						
				        
								<center>
									
									<input type="submit" class="btn btn-primary" name="submit" value="Insert">
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="reset" class="btn btn-danger" name="cancel" value="Cancel">
								</center>
				
				       
			</form>
		</div>
			
    </div>
	
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.0.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>