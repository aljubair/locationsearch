<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="address";

$connect = mysqli_connect($hostname,$username,$password,$databaseName);
$query="SELECT * FROM division";

$result = mysqli_query($connect,$query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Location Search</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			<style>
				body {
					margin-top:150px;;
					margin-left:210px;
				}
			</style>
	</head>
	<body onload="Id()">
		<div class="container">
		<script>
			function Id(){
				document.search_box.search.focus();
			}
		</script>
			<center>
	        <form name="search_box" action="hospital.php" method="get">
				
					<img src="Upimages/logo3.jpg" class="img-responsive" style="margin-right:135px;height:200px;" alt="Search">
					
				<div class="row">
					<div class="col-sm-2">
						<div class="form-group">
		
								  <select class="form-control" id="sel1" required>
									<option>Select Division</option>
									
									<?php while($row=mysqli_fetch_array($result)):;?>
									<option><?php echo $row[0];?></option>
									<?php endwhile;?>
									
								  </select>
						</div>
				
					</div>
					
					<div class="col-sm-2">
						<div class="form-group">
		
								  <select class="form-control" id="sel1">
									<option>Select District</option>
									<option>Indoor</option>
									<option>3</option>
									<option>4</option>
								  </select>
						</div>
				
					</div>
					
					<div class="col-sm-2">
						<div class="form-group">
		
								  <select class="form-control" id="sel1">
									<option>Select Area</option>
									<option>Indoor</option>
									<option>3</option>
									<option>4</option>
								  </select>
						</div>
				
					</div>
					<div class="col-sm-2">
						<div class="form-group">
		
								  <input type="text" class="form-control" name="search" placeholder="Road no(Optional)">
						</div>
				
					</div>
					
					<div class="col-sm-2">
						<div class="form-group">
		
								  <input type="submit" name="search_button" class="btn btn-outline-primary" value="Search">
						</div>
				
					</div>
				</div>
					
				</center>
			</form>
	</div>
				<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	</body>
</htmL>