<?php
$server = "localhost";
$username = "u336388615_evaidya";
$password = "Evaidya@11";
$database = "u336388615_Evaidya";

$conn = mysqli_connect($server, $username, $password, $database);
if ($conn) {
	echo "success";
            
}
else{
	die("Error". mysql_connect_error());
}


?>
