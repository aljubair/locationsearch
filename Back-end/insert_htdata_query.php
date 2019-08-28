<?php


$con = mysqli_connect("localhost","root","");

if(!$con){
	echo "Not connected";
}

if(!mysqli_select_db($con,'ls')){
	echo "Database Not Selected";
}

if(isset($_POST['submit'])){
	
     $Id=$_POST['htid'];
	 
	 $Packages=$_POST['packages'];
	 $Facility=$_POST['facility'];
	 $Cost=$_POST['cost'];
	 $Check=$_POST['check_in_out'];
	 
	  
			   $sql4="insert into hotel
		           values ('$Id','$Packages','$Facility','$Cost','Check')";
				   
				  


		if(!mysqli_query($con,$sql4))
		{
		echo "<script> alert('Uploading Failed!!')</script>";
		}
		
		else{
		echo "<script> alert('site uploaded succesfully')</script>";
		}
        //echo "<img src='upimages/$image'/>";
}

?>