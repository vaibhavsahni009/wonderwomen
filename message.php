<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "user";
$con = mysqli_connect($server,$user,$pass,$dbname);

$sql = "SELECT * FROM info";
$result = mysqli_query($con, $sql);
   while($row = mysqli_fetch_array($result)) {
   	 $h = $row["Em.Phone Number"]; }  	 

function distance($lat1, $lon1, $lat2, $lon2, $unit) {
  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
    return 0;
  }
  else {
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
      return ($miles * 1.609344);
    } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
      return $miles;
    }
  }
}


$sql = "SELECT * FROM user_lat";
$result = mysqli_query($con, $sql);
   while($row = mysqli_fetch_array($result)) {
   	 $la = $row["Latitude"]; } 

$sql = "SELECT * FROM user_lat";
$result = mysqli_query($con, $sql);
   while($row = mysqli_fetch_array($result)) {
   	 $lo = $row["Longitude"]; } 


	// Authorisation details.
	$username = "siddhantgupta792000@gmail.com";
	$hash = "366a395277b95080e1562748dba2e7b2b6cf0bad8d53c6df7ff9c29814f6cc3d";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$h"; // A single number or a comma-seperated list of numbers
	$message = "I need urgent help.Location=> www.latlong.net/c/?lat=28.675892&long=77.112735";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

  header('Location:defence.html');
	

?>

