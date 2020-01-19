<?php 

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "activist";
$con = mysqli_connect($server,$user,$pass,$dbname);

 $a = filter_input(INPUT_POST , 'lat');

$b = filter_input(INPUT_POST , 'long');

 $sql = "TRUNCATE TABLE acti_loc";

 $data = mysqli_query($con,$sql);

 


$query = "INSERT INTO acti_loc VALUES ('$a','$b')";
	 
     $data = mysqli_query($con,$query);

     header('Location:live_loc.html');

?>



