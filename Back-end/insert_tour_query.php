<?php


$con = mysqli_connect("localhost","root","");

if(!$con){
	echo "Not connected";
}

if(!mysqli_select_db($con,'ls')){
	echo "Database Not Selected";
}

if(isset($_POST['submit'])){
	
     $Id=$_POST['tid'];
	 
	 $Tcategory=$_POST['tcategory'];
	 $Ttime=$_POST['ttime'];
	 $Offday=$_POST['offday'];
	
			   
						        $sql7="insert into tourist
		                            values ('$Id','$Tcategory','$Ttime','Offday')";
		


		if(!mysqli_query($con,$sql7))
		{
		echo "<script> alert('Uploading Failed!!')</script>";
		}

		
		else{
		echo "<script> alert('site uploaded succesfully')</script>";
		}
        //echo "<img src='upimages/$image'/>";
}

?>