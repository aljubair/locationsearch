<?php


$con = mysqli_connect("localhost","root","");

if(!$con){
	echo "Not connected";
}

if(!mysqli_select_db($con,'ls')){
	echo "Database Not Selected";
}

if(isset($_POST['submit'])){
	
     $Id=$_POST['rid'];
	
	 $Menu=$_POST['menu'];
	 $Price=$_POST['price'];
	 $Offer=$_POST['offer'];
	
				   
				   $sql5="insert into restaurant
		               values ('$Id','$Menu','$Price','$Offer')";
				   
		


		if(!mysqli_query($con,$sql5))
		{
		echo "<script> alert('Uploading Failed!!')</script>";
		}
		
		else{
		echo "<script> alert('site uploaded succesfully')</script>";
		}
        //echo "<img src='upimages/$image'/>";
}

?>