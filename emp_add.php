<?php

$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "employee";

$emp_image=$_POST['emp_image'];
$emp_dep=$_POST['emp_dep'];
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
$emp_lname= $_POST['emp_lname'];
$emp_dob = $_POST['emp_dob'];
$fname=$_POST['fname'];
$blood=$_POST['blood'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$status=$_POST['status'];
$rel=$_POST['rel'];
$caste=$_POST['caste'];
$iname=$_POST['iname'];
$syear=$_POST['syear'];
$spercentage=$_POST['spercentage'];
$ins_name=$_POST['ins_name'];
$hyear=$_POST['hyear'];
$hpercentage=$_POST['hpercentage'];
$ug=$_POST['ug'];
$department=$_POST['department'];
$inname=$_POST['inname'];
$byear=$_POST['byear'];
$bpercentage=$_POST['bpercentage'];
$pg=$_POST['pg'];
$pdepartment=$_POST['pdepartment'];
$inst_name=$_POST['inst_name'];
$pyear=$_POST['pyear'];
$ppercentage=$_POST['ppercentage'];
$addcourse=$_POST['addcourse'];
$oncourse=$_POST['oncourse'];
$imagefile=$_POST['imagefile'];
$committee=$_POST['committee'];
$webinarconduct=$_POST['webinarconduct'];
$webinarattend=$_POST['webinarattend'];
$workshop=$_POST['workshop'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (emp_dep,emp_id,emp_name,emp_lname,emp_dob,fname,blood,gender,address,status,rel,caste,
iname,syear,spercentage,ins_name,hyear,hpercentage,ug,department,inname,byear,bpercentage,pg,pdepartment,inst_name,
pyear,ppercentage,addcourse,oncourse,imagefile,committee,webinarconduct,webinarattend,workshop)VALUES ('".$emp_dep."','".$emp_id."','".$emp_name."','".$emp_lname."','".$emp_dob."','".$fname."','".$blood."',
'".$gender."','".$address."','".$status."','".$rel."','".$caste."','".$iname."','".$syear."','".$spercentage."','".$ins_name."',
'".$hyear."','".$hpercentage."','".$ug."','".$department."','".$inname."','".$byear."','".$bpercentage."','".$pg."','".$pdepartment."',
'".$inst_name."','".$pyear."','".$ppercentage."','".$addcourse."','".$oncourse."','".$imagefile."','".$committee."','".$webinarconduct."','".$webinarattend."','".$workshop."')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>New employee added </h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('location:view.php');  


?>

