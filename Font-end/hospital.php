
<!DOCTYPE html>
<html>

<head>
	<title></title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	 
	 <script src="js/jquery.min.js"></script>  
	  
           <script src="js/bootstrap.min.js"></script>  
</head>
<body>

<nav class="navbar navbar-default">
  <div class="">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<a href="search.php"><img src="Upimages/logo3.jpg" class="img-responsive" alt="Search" style="height:30px;margin-top:20px;"></a>
      </ul>
	  
      <form class="navbar-form navbar-left">
		
				<div class="input-group input-group-lg" style="width:600px;margin-left:20px;margin-top:10px;">
				  <input type="text" class="form-control" name="search">
				  <div class="input-group-btn">
					<button class="btn btn-primary" type="submit">Go</button>
				  </div>
				</div>

				<ul class="nav nav-pills" style="margin-top:25px;margin-left:20px;">
												<li role="presentation" class="active"><a href="hospital.php">Hospital</a></li>
												<li role="presentation" ><a href="restaurant.php">Restaurant</a></li>
												<li role="presentation" ><a href="shopping.php">Shopping Mall</a></li>
												<li role="presentation"><a href="hotel.php">Guest House </a></li>
												<li role="presentation"><a href="tourist.php">Tourist Place</a></li>
				</ul>
		
      </form>
	  
      <ul class="nav navbar-nav navbar-right" style="margin-top:20px; margin-right:20px;">
	  
		    <button type="button" class="btn btn-primary btn-sm">Sign in</button>
		   
        
      </ul>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>	
				

<div class="container" >

		<div class="col-sm-7" style="margin-left:25px;">

					<div class="panel panel-info" style="margin-top:30px;">
					
						  <div class="panel-heading"> 
						  
								<form action="hospitalsort.php" method="post">
								<center>
								    <div class="radio" >
											Sort by:  <label><input type="radio" name="sort" value="name">Name</label>
										
													  <label><input type="radio" name="sort" value="rating">Rating</label>
									</div>
								</center>
								</form>
								
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
								<?php

										$connect = mysqli_connect("localhost", "root", "", "ls");
									
										$query = "SELECT id,name,area,road_no,post_code,district FROM main_area WHERE id like '8-%'";
										$result = mysqli_query($connect, $query);
										while($row = mysqli_fetch_array($result)):;
										$hdata=$row["id"];
								  ?>
								  
							<tr id="sort">
							
								<td><?php echo $row["name"]; ?></td>
								<address><td><?php echo $row["area"]." ".$row["road_no"].", ".$row["district"]." ".$row["post_code"]; ?></td></address>
							
								<td><?php echo $row["id"]; ?></br></br></br><input type="button" name="view" value="Details" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                          
							</tr>
							<?php endwhile; ?>
						     
							 
					</table>
		</div>
</div>				
			<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h3 class="modal-title" id="myModalLabel">Pancare Hospital LTD.</h3>
			    <h5 style="color:blue;">4.2 *(12 Location reviews)</h5>	
				 <div class="btn-group" style="margin-left:690px;margin-top:px;">
					  <a href="https://www.youtube.com/" target="_blank"><input type="button" name="view" value="Website" class="btn btn-primary btn-sm" /></a>
					  <input type="button" name="view" value="Write a review" style="margin-right:10px;"class="btn btn-primary btn-sm" />
				 </div>
	 </div>
			  <div class="modal-body">
					
					<div class="row" id="hospital_details">
                        
				    </div>	
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>-->
    </div>
  </div>
</div>



	<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var hospital_id = $(this).attr("id");  
           $.ajax({  
                url:"hdetails.php",  
                method:"post",  
                data:{hospital_id:hospital_id},  
                success:function(data){  
                     $('#hospital_details').html(data);  
                     $('#myModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
 
 <script>
 
 $(document).ready(function(){  
      $('input[type="radio"]').click(function(){  
           var sort = $(this).attr("id");  
           $.ajax({  
                url:"hospitalsort.php",  
                method:"post",  
                data:{sort:sort},  
                success:function(data){  
                     $('#sort').html(data); 
                }  
           });  
      });
	  
 });
 
 
 </script>