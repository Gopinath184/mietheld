
<?php

$servername = "localhost";
$username = "root";
$password = "";
$recylename = "recyclerite";
$conn = new mysqli($servername, $username, $password, $recylename);

if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}


?>