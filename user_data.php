<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "user";
$con = mysqli_connect($server,$user,$pass,$dbname);

$a = $_POST['n'];
$b = $_POST['email'];
$c = $_POST['ph'];
$d = $_POST['add'];
$e = $_POST['eph'];
$f = $_POST['pass'];



$query = "INSERT INTO info VALUES ('$a','$b','$c','$d','$e','$f')";

$data = mysqli_query($con,$query);

header('Location:user_logined2.html');

?>

<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "user";
$con = mysqli_connect($server,$user,$pass,$dbname);

$b = $_POST['email'];

$f = $_POST['pass'];



$query = "INSERT INTO cred VALUES ('$b','$f')";

$data = mysqli_query($con,$query);


?>