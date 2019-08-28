 <?php  
  
 $connect = mysqli_connect("localhost", "root", "", "ls");  
 $output = '';  
 if(isset($_POST["category"]))  
 {  
        
           $sql = "SELECT * FROM hospital WHERE  category='".$_POST["category"]."'";  
     
      
      $result = mysqli_query($connect, $sql);
		$output .= '<table  class="table" >
														  <thead>
															  <tr>
																  <td> Doctor Name</td>
																  <td> Time</td>
															  </tr>
														</thead>
														
														
													
										 ';
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '                 
													<tr>
														<td>'.$row["dr_name"].'</td>
														<td>'.$row["time"].'</td>
													</tr>

					   ';  
      }  
	  $output .='</table>';
      echo $output;  
 }  
 ?>  