<!DOCTYPE html>
<html>

<head>
	<title></title>


</head>
<body>

						<?php  
						 if(isset($_POST["restaurant_id"]))  
						 {  
							  $output = ''; 	  
							  $connect = mysqli_connect("localhost", "root", "", "ls");  
							  $query = "SELECT * FROM info WHERE iid = '".$_POST["restaurant_id"]."'";  
							  
							  $result = mysqli_query($connect, $query);  
							  
							  
							  while($row = mysqli_fetch_array($result))  
							  {  
								   $output .= '<div class="col-sm-6">	  
													
													<a><img src="Upimages/'.$row["img"].'" class="img-responsive" alt="Search" style="height:250px;"></a> 
													 </br>
													 <h5><strong>Address : </strong>9No. Golartak, Mirpur - 1, Dhaka-1216</h5>
													 <h5><strong>Phone : </strong>'.$row["cell"].'+880 1631095127 </h5>
													 <h5><strong>Offday : </strong>Friday</h5>

												</div>';  
												 
							  }
							  echo $output;
							  }  
						 ?>
	
		  
						<div class="col-sm-6">
							  
											<table class="table">
												  <thead >
													<tr>
														
														<th>Menu</th>
														<th>Price</th>
														<th>Offer</th>
														
													</tr>
												  </thead>
												       <?php 
													    if(isset($_POST["restaurant_id"])) { 
															 $output2='';
															 $connect = mysqli_connect("localhost", "root", "", "ls");  
															 $query2 = "SELECT * FROM restaurant WHERE rid = '".$_POST["restaurant_id"]."'";
															 $result2 = mysqli_query($connect, $query2); 															
															
														     while($row2 = mysqli_fetch_array($result2)){
																
																$output2 .=	'<tr>
																			<td>'.$row2["menu"].'</td>
																			<td>'.$row2["price"].'</td>
																			<td>'.$row2["offer"].'</td>
																			</tr>';
															 }
														echo $output2;
														}
												   ?>
												   
											</table>  
								
						</div> 
	
 
 

</body>
</html>