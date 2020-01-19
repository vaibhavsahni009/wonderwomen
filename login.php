<?php 

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "user";
$con = mysqli_connect($server,$user,$pass,$dbname);

$sql = "SELECT * FROM cred";
$result = mysqli_query($con, $sql);
   while($row = mysqli_fetch_array($result)) {
   	 $h = $row["Email"]; }

$sql = "SELECT * FROM cred";
$result = mysqli_query($con, $sql);
   while($row = mysqli_fetch_array($result)) {
   	 $g = $row["pass"]; }

   	 $a = $_POST['n1'];
     $b = $_POST['pass1'];

     if($a==$h && $b==$g){
     	header('Location:user_logined.html');

     }

     else{
     	header('Location:login_failed.html');
     }

     

?>


