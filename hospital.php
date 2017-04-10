<!DOCTYPE html>
<html>

<head>
	<title></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>
<body>

	
		<nav class="navbar navbar-default">
			<div class="col-sm-2">
						<a href="search.php"><img src="Upimages/logo3.jpg" class="img-responsive" alt="Search" style="height:70px;margin-left:99px;"></a>
			</div>
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->


				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  
					<div class="container">
						  <ul class="nav navbar-nav navbar-right">
							<li><a href="#"><strong>Sign In</strong></a></li>
							<li><a href="#"><strong>Register</strong></a></li>
							
						  </ul>
					</div>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
		</nav>	
			
				
				

<div class="container">

	


					<ul class="nav nav-tabs nav-justified">
										<li role="presentation" class="active"><a href="hospital.php">Hospital</a></li>
									  <li role="presentation"><a href="restaurant.php">Restaurant</a></li>
									  <li role="presentation"><a href="shopping.php">Shopping Mall</a></li>
									   <li role="presentation"><a href="hotel.php">Guest House </a></li>
										<li role="presentation"><a href="tourist.php">Tourist Place</a></li>
									</ul>



					<div class="panel panel-info" style="margin-top:30px;">
						  <div class="panel-heading"> 
								<center>
								   Sort by: <label class="checkbox-inline"><input type="checkbox" value="">Name</label>
								   <label class="checkbox-inline"><input type="checkbox" value="">Rating</label>
								</center>
						 </div>
						  
					</div> 
			 
						 <table class="table">
						  <thead >
							<tr>
								
								<th>Name</th>
								<th>Address</th>
								<th>Rating</th>
								
							</tr>
						  </thead>
						  <tr>
							<td>Square Hospitals Limited</td>
							<td>18/F West 1205, 14A Chandrashila-Suvastu Tower 69/1 </br>Bir Uttam Qazi Nuruzzaman Road Panthapath, Dhaka</td>
							<td>---------</br></br></br><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
Details
</button></td>
							
						  </tr>
						  <tr>
							<td>Puri Jagannadh</td>
							<td>Temper</td>
							<td>Bahubali</br></br></br><button type="button" class="btn btn-info">Details</button></td>
						  </tr>
						  
					</table>
				
			<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">Hospital Details</h4></center>
      </div>
			  <div class="modal-body">
					
					<div class="row">
                        <div class="col-sm-6">


						 <a href="search.php"><img src="Upimages/images.jpg" class="img-responsive" alt="Search" style="height:250px;"></a>
						 <h4>Website</h4>
						 <h4>Phone No:</h4>
				
						</div>
						
						<div class="col-sm-6">
						 <div class="form-group">
							  <label for="sel1">Select Division:</label>
							  <select class="form-control" id="sel1">
								<option>Indoor</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							  </select>
						 </div>
				
						 <table class="table">
							  <thead >
								<tr>
									
									<th>Doctor Name</th>
									<th>Time</th>
									
								</tr>
							  </thead>
							  <tr>
								<td>S. S. Rajamouli</td>
								<td>Bahubali</td>
							
								
							  </tr>
							  <tr>
								<td>Puri Jagannadh</td>
								<td>Temper</td>
								
							  </tr>
							  
							</table>
						</div>	
			</div>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>