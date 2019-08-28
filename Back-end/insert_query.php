<?php


$con = mysqli_connect("localhost","root","");

if(!$con){
	echo "Not connected";
}

if(!mysqli_select_db($con,'ls')){
	echo "Database Not Selected";
}

if(isset($_POST['submit'])){
	
     $Id=$_POST['id'];
	 $Rating=$_POST['rating'];
	 $Name=$_POST['name'];
	 $Roadnumber=$_POST['roadnumber'];
	 $Area=$_POST['area'];
	 $Postcode=$_POST['postcode'];
	 $District=$_POST['district'];
	 $Division=$_POST['division'];
	 $Website=$_POST['website'];
	 $Cell=$_POST['cell'];
	
	 
	 $image = $_FILES['image']['name'];
	 $image_tmp = $_FILES['image']['tmp_name'];
	 move_uploaded_file($image_tmp,"upimages/$image");
	 
	 $sql="insert into main_area 
		values ('$Id','$Name','$Area','$Roadnumber','$Postcode','$District','$Division','$Rating')";
		
		$sql2="insert into info
		   values ('$Id','$image','$Website','$Cell')";
		   
		   

		if(!mysqli_query($con,$sql))
		{
		echo "<script> alert('Uploading Failed!!')</script>";
		}

		else if(!mysqli_query($con,$sql2))
		{
		echo "<script> alert('Uploading Failed!!')</script>";
		}
		
		
		else{
		echo "<script> alert('site uploaded succesfully')</script>";
		}
        //echo "<img src='upimages/$image'/>";
}

?>