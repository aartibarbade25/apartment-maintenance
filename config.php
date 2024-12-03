<?php
$servername = "localhost";
$username = "your_user";
$password = "your-password";
$dbname = "your_database_name";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection failed: " . $conn->connect-error);
}
?>


