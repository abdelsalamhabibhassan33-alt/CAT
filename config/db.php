//Mohammad Abdulmageed Mohammad Ahmad 
//25/30052
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "musanze_service_desk";

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}