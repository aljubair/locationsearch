<?php									
										if(isset($_POST["sort"])){
										
										$connect = mysqli_connect("localhost", "root", "", "ls");
									
										$query = "SELECT id,name,area,road_no,post_code,district FROM main_area WHERE id like '8-%' ORDER BY name";
										$result = mysqli_query($connect, $query);
										
										while($row = mysqli_fetch_array($result)){
											
											$output .= '<td>'.$row["name"].'</td>
								<td> '.$row["area"].' '.$row["road_no"].' , '.$row["district"].' '.$row["post_code"].' </td>
							
								<td>'. $row["id"].' </br></br></br><input type="button" name="view" value="Details" id="'. $row["id"].'" class="btn btn-info btn-xs view_data"/></td>';  
                          
										}
										echo $output;
										}
										
										
?>