<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "ls");
$country = '';
$query = "SELECT divname FROM district GROUP BY divname ORDER BY divname";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
 $country .= '<option value="'.$row["divname"].'">'.$row["divname"].'</option>';
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Location Search</title>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	        <form name="search_box" action="hospital.php" method="post">
				
					<img src="Upimages/logo3.jpg" class="img-responsive" style="margin-right:135px;height:200px;" alt="Search">
					
				<div class="row">
					<div class="col-sm-2">
						<div class="form-group">
		
								  <select name="division" id="division" class="form-control action">
										<option value="">Select Division</option>
										<?php echo $country; ?>
								  </select>
								
						</div>
				
					</div>
					
					<div class="col-sm-2">
						<div class="form-group">
		
								  <select name="district" id="district" class="form-control action">
										<option value="">Select District</option>
								  </select>
						</div>
				
					</div>
					
					<div class="col-sm-2">
						<div class="form-group">
									<select name="area" id="area" class="form-control">
											<option value="">Select Area</option>
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
			
	</body>
</html>

<script>
$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "division")
   {
    result = 'district';
   }
   else
   {
    result = 'area';
   }
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});
</script>
