<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
<?php  
 if(isset($_POST["hospital_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "ls");  
      $query = "SELECT * FROM info WHERE iid = '".$_POST["hospital_id"]."'";  
      $result = mysqli_query($connect, $query);  
	  $hdata=$_POST["hospital_id"];
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-sm-6" >	
		   
                             <a ><img src="Upimages/'.$row["img"].'" class="img-responsive" alt="Search" style="height:250px;"></a> 
							 </br>
							 <h5><strong>Address : </strong>9No. Golartak, Mirpur - 1, Dhaka-1216</h5>
							 <h5><strong>Phone : </strong>'.$row["cell"].'+880 1631095127 </h5>
							 <h5><strong>Offday : </strong>Friday</h5>
							 

						</div>
                ';  
      }  
 
      echo $output;  
 }  
 ?>
 
<?php
$connect = mysqli_connect("localhost", "root", "", "ls");  
 
 function find_category($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM hospital Group BY category";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["category"].'">'.$row["category"].'</option>';  
      }  
      return $output;  
 }  
?>
 
			<div class="col-sm-6">
								<div class="form-group">
							  
									  <select class="form-control" id="category" >
										  
										  <option>Select Division</option>
										  <?php echo find_category($connect);?>	 
											
									  </select>
									  
									    <table  class="table" id ="details">
														 
													
										</table> 
							    </div>

			</div>
			 
 </body>
  
</html>

<script>  
 $(document).ready(function(){  
      $('#category').change(function(){  
           var category = $(this).val();
           $.ajax({  
                url:"hdivision.php",  
                method:"POST",  
                data:{category:category}, 				
                success:function(data){  
                     $('#details').html(data);
				 
                }  
           });  
      });  
	  

 });  
 
 
 </script> `