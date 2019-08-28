<?php


$con = mysqli_connect("localhost","root","");

if(!$con){
	echo "Not connected";
}

if(!mysqli_select_db($con,'ls')){
	echo "Database Not Selected";
}

if(isset($_POST['submit'])){
	
     $Id=$_POST['hid'];
	 $Drname=$_POST['dr_name'];
	 $Category=$_POST['category'];
	 $Time=$_POST['time'];

	    
		   $sql3="insert into hospital
		       values ('$Id','$Drname','$Category','$Time')";
			   


		if(!mysqli_query($con,$sql3))
		{
		echo "<script> alert('Uploading Failed!!')</script>";
		}
		
		else{
		echo "<script> alert('site uploaded succesfully')</script>";
		}
        //echo "<img src='upimages/$image'/>";
}

?>