<?php


$con = mysqli_connect("localhost","root","");

if(!$con){
	echo "Not connected";
}

if(!mysqli_select_db($con,'ls')){
	echo "Database Not Selected";
}

if(isset($_POST['submit'])){
	
     $Id=$_POST['sid'];
	 
	 $Scategory=$_POST['scategory'];
	 $Floor=$_POST['floor'];
	
	
				       $sql6="insert into shop
		                   values ('$Id','$Scategory','$Floor')";
						   
						       


		if(!mysqli_query($con,$sql6))
		{
		echo "<script> alert('Uploading Failed!!')</script>";
		}

		
		else{
		echo "<script> alert('site uploaded succesfully')</script>";
		}
        //echo "<img src='upimages/$image'/>";
}

?>