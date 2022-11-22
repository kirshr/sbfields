<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "nfabian1"; 
$dbPassword = "study@N4IT"; 
$dbName     = "nfabian1_capstone"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}