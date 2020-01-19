<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "activist";
$con = mysqli_connect($server,$user,$pass,$dbname);

$a = $_POST['n'];
$b = $_POST['ph'];
$c = $_POST['add'];
$d = $_POST['ano'];


$query = "INSERT INTO acti_info VALUES ('$a','$b','$c','$d')";

$data = mysqli_query($con,$query);

header('Location:live_loc.html');;

?>