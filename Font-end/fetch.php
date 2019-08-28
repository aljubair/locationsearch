<?php

   
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "ls");
 $output = '';
 
 

 if($_POST["action"] == "division")
 {
  $query = "SELECT disname FROM district WHERE divname = '".$_POST["query"]."' GROUP BY disname";
  $result = mysqli_query($connect, $query);
 $output .= '<option value="">Select District</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["disname"].'">'.$row["disname"].'</option>';
  }
 }
 


 if($_POST["action"] == "district")
 {
  $query = "SELECT area FROM district WHERE disname = '".$_POST["query"]."'";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="">Select Area</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["area"].'">'.$row["area"].'</option>';
  }
 }
 echo $output;
}
?>


