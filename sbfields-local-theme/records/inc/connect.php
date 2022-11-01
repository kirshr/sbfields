<?php 
// connect to db  - replace with your information
$servername = "localhost";
$username = "nfabian1";
$password = "study@N4IT";
$db = "nfabian1_capstone";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";

//This stops SQL Injection in POST vars 
foreach ($_POST as $key => $value) 
{ 
	$_POST[$key] = mysqli_real_escape_string($conn, $value); 
} 
//This stops SQL Injection in GET vars 
foreach ($_GET as $key => $value) 
{ 
	$_GET[$key] = mysqli_real_escape_string($conn, $value); 
}
?>