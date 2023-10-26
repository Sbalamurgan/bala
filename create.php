<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$user_name=$_POST['user_name'];
$user_mail=$_POST['user_mail'];
$user_password=$_POST['user_password'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (user_name,user_mail,user_password)
VALUES ('".$user_name."','".$user_mail."','".$user_password."')";

if ($conn->query($sql) === TRUE) {
  header('location:home.php');  
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
