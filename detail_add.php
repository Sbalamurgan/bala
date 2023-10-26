<?php

$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "emp";

$wid=$_POST['wid'];
$name=$_POST['name'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$fathername=$_POST['fathername'];
$bloodgroup=$_POST['bloodgroup'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$status=$_POST['status'];
$rel=$_POST['rel'];
$caste=$_POST['caste'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (wid,name,lname,dob,fathername,bloodgroup,gender,address,status,
rel,caste)VALUES ('".$wid."','".$name."','".$lname."','".$dob."','".$fathername."',
'".$bloodgroup."','".$gender."','".$address."','".$status."','".$rel."','".$caste."')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>New employee added </h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('location:detailview.php');  


?>

