<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from users";
echo "<h1>EMPLOYEE DETAILS</h1>";
echo'<table border="1" cellspacing="5" cellpadding="5">
<tr>
<th>ID</th>
<th>EMPLOYEE ID</th>
<th>FULL NAME</th>
<th>LAST NAME</th>
<th>DOB</th>
<th>FATHER NAME</th>
<th>BLOOD GROUP</th>
<th>GENDER</th>
<th>ADDRESS</th>
<th>STATUS</th>
<th>RELIGION</th>
<th>CASTE</th>
<th colspan=2>CONTROLS</th>
</tr>';


$result=$conn->query($sql);

if($result->num_rows>0)
{
while($row = $result->fetch_assoc())
   { 
    $id=$row["id"];
    $w_id=$row["w_id"];
    $name=$row["name"];
    $lname=$row["lname"];
    $dob=$row["dob"];
    $fathername=$row["fathername"];
    $bloodgroup=$row["bloodgroup"];
    $gender=$row["gender"];
    $address=$row["address"];
    $status=$row["status"];
    $rel=$row["rel"];
    $caste=$row["caste"];
    

    echo'<tr>
    <td>'.$id.'</td>
    <td>'.$w_id.'</td>
    <td>'.$name.'</td>
    <td>'.$lname.'</td>
    <td>'.$dob.'</td>
    <td>'.$fathername.'</td>
    <td>'.$bloodgroup.'</td>
    <td>'.$gender.'</td>
    <td>'.$address.'</td>
    <td>'.$status.'</td>
    <td>'.$rel.'</td>
    <td>'.$caste.'</td>
    
       
    <td> <a href=detaildelete.php?id='.$id.'><i class="fa fa-close" style="color:red">DELETE</a></td>
    </tr>';
    
   }
}
else {
  echo "Error selecting the Records , No results found";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body bgcolor="#ddd">
  <div class="topnav">
 

    
<button type="submit"><a href="detail.php">ADD USER </a></button>

  <form action="searchadmin.php" method="POST" >
    
        <input type="text" name="id"><button type="submit">search</button>
      </form>

<br><br>
</body>
</html>
