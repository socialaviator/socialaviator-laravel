<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection settings
$host = 'localhost';
$db = 'u362868130_adminpanel'; // Replace with your actual database name
$user = 'u362868130_admindb'; // Replace with your actual database username
$pass = 'Social@Admini$2024'; // Replace with your actual database password

// Create a new MySQLi connection
$mysqli = new mysqli($host, $user, $pass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
