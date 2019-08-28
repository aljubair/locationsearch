<!DOCTYPE html>
<html>

<head>
	<title>Admin panel</title>
	
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
					<li class="active"><a href="admin.php">Add Data</a></li>
					<li><a href="hdata.php">Hospital</a></li>
					<li><a href="htdata.php">Hotel</a></li>
				    <li><a href="rest.php">Restaurant</a></li>
					<li><a href="shop.php">Shopping Mall</a></li>
					<li><a href="tourist.php">Tourist Place</a></li>
					
					<li><a href="#">Delete Data</a></li>
					<li><a href="#">Edit Data</a></li>
					<li><a href="#">Approve Data</a></li>
					<li><a href="#">Improve List</a></li>
					<li><a href="#">Admin List</a></li>
					<li><a href="#">User List</a></li>
					<li><a href="#">Improve List</a></li>
			
			
					
				  
				  </ul>
			</div>
			
			<form action="insert_query.php" method="post" enctype="multipart/form-data">
			
						<div class="form-group">
						                      <center>  <h2>Main Area</h2>  <center>
							
								<label class="col-sm-1" for="cid"><b>ID</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="cid" name="id" placeholder="Enter Id" > </br></input>
								</div>
							

				
							
								<label class="col-sm-1" for="crating"><b>Rating</b></label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="crating" name="rating" placeholder="Enter Rating"></br></input>
								</div>
							
						
						         
					
							
								<label class="col-sm-1" for="cname"><b>Name</b></label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="cname" name="name" placeholder="Enter Name" ></br></input>
								</div>
							
						
			
						
						
					
							
								<label class="col-sm-1" for="croadnumber"><b>Road</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="croadnumber" name="roadnumber" placeholder="Enter Road Number" ></br></input>
								</div>
					
					
					
							
								<label class="col-sm-1" for="carea"><b>Area</b></label>
							
								
						        <div class="col-sm-4">
									<input type="text" class="form-control" id="croadnumber" name="area" placeholder="Enter Area Number" ></br></input>
								</div>
						
						
							
								<label class="col-sm-1" for="cpostcode"><b>Post Code</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="cpostcode" name="postcode" placeholder="Enter Post code"  ></br></input>
								</div>
					
						
						
							
								<label class="col-sm-1" for="cdistrict"><b>District</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="croadnumber" name="district" placeholder="Enter District Number"  ></br></input>
								</div>
						
						
						
								<label class="col-sm-1" for="cdivision"><b>Division</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="croadnumber" name="division" placeholder="Enter Division Number" ></br></input>
								</div>
						                </br>
						
								                             <center><h2>Information</h2> </center>
								
								<label class="col-sm-1" for="cwebsite"><b>Website</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="croadnumber" name="website" placeholder="Enter website address"  ></br></input>
								</div>
								
								<label class="col-sm-1" for="ccell"><b>Cell</b> </label>
							
								<div class="col-sm-4">
									<input type="text" class="form-control" id="croadnumber" name="cell" placeholder="Enter Cell Number" ></br></input>
								</div>
								
								<label class="col-sm-1" for="cimage"><b>Image</b></label>
							
								<div class="col-sm-4">
									<input type="file" class="form-control"  name="image" ></br></br></input>
								</div>
								
								
								
								
								
								</br>
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