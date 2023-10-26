<!doctype html>
<html lang="en">
  <head>
    <title>FILTER</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <div class="fixed-top">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid"></div>
      </nav>
    </div>
  
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "employee";
      $id=$_POST['id'];
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error)
      {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * from users where id='$id'";
      echo'<span style="font-size:30px;">FILTER</span>';
      echo'<table border="1" cellspacing="2" cellpadding="2">
      <tr>

      <th>ID</th>
      <th>EMPLOYEE DEPARTMENT</th>
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
      <th>SSLC SCHOOL NAME</th>
      <th>YEAR OF PASSING</th>
      <th>PERCENTAGE</th>
      <th>HSC SCHOOL NAME</th>
      <th>YEAR OF PASSING</th>
      <th>PERCENTAGE</th>
      <th>UG DEGREE</th>
      <th>UG DEPARTMENT</th>
      <th>INSTITUTE NAME</th>
      <th>YEAR OF PASSING</th>
      <th>PERCENTAGE</th>
      <th>PG DEGREE</th>
      <th>PG DEPARTMENT</th>
      <th>INSTITUTE NAME</th>
      <th>YEAR OF PASSING</th>
      <th>PERCENTAGE</th>
      <th>ADDITIONAL COURSE</th>
      <th>ONLINE COURSE</th>
      <th>IMAGE FILE</th>
      <th>COMMITTEE</th>
      <th>WEBINAR CONDUCT</th>
      <th>WEBINAR ATTEND</th>
      <th>WORKSHOP</th>
      </tr>';
      $result = $conn->query($sql);
      if ($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        { //fetches all the tuple's data
            $id=$row["id"]; 
            $emp_dep=$row["emp_dep"];
            $emp_id=$row["emp_id"];
            $emp_name=$row["emp_name"];
            $emp_lname=$row["emp_lname"];
            $emp_dob=$row["emp_dob"];
            $fname=$row["fname"];
            $blood=$row["blood"];
            $gender=$row["gender"];
            $address=$row["address"];
            $status=$row["status"];
            $rel=$row["rel"];
            $caste=$row["caste"];
            $iname=$row["iname"];
            $syear=$row["syear"];
            $spercentage=$row["spercentage"];
            $ins_name=$row["ins_name"];
            $hyear=$row["hyear"];
            $hpercentage=$row["hpercentage"];
            $ug=$row["ug"];
            $department=$row["department"];
            $inname=$row["inname"];
            $byear=$row["byear"];
            $bpercentage=$row["bpercentage"];
            $pg=$row["pg"];
            $pdepartment=$row["pdepartment"];
            $inst_name=$row["inst_name"];
            $pyear=$row["pyear"];
            $ppercentage=$row["ppercentage"];
            $addcourse=$row["addcourse"];
            $oncourse=$row["oncourse"];
            $imagefile=$row["imagefile"];
            $committee=$row["committee"];
            $webinarconduct=$row["webinarconduct"]; 
            $webinarattend=$row["webinarattend"];
            $workshop=$row["workshop"];
    
            echo'<tr>
            <td>'.$id.'</td>
            <td>'.$emp_dep.'</td>
            <td>'.$emp_id.'</td>
            <td>'.$emp_name.'</td>
            <td>'.$emp_lname.'</td>
            <td>'.$emp_dob.'</td>
            <td>'.$fname.'</td>
            <td>'.$blood.'</td>
            <td>'.$gender.'</td>
            <td>'.$address.'</td>
            <td>'.$status.'</td>
            <td>'.$rel.'</td>
            <td>'.$caste.'</td>
            <td>'.$iname.'</td>
            <td>'.$syear.'</td>
            <td>'.$spercentage.'</td>
            <td>'.$ins_name.'</td>
            <td>'.$hyear.'</td>
            <td>'.$hpercentage.'</td>
            <td>'.$ug.'</td>
            <td>'.$department.'</td>
            <td>'.$inname.'</td>
            <td>'.$byear.'</td>
            <td>'.$bpercentage.'</td>
            <td>'.$pg.'</td>
            <td>'.$pdepartment.'</td>
            <td>'.$inst_name.'</td>
            <td>'.$pyear.'</td>
            <td>'.$ppercentage.'</td>
            <td>'.$addcourse.'</td>
            <td>'.$oncourse.'</td>
            <td>'.$imagefile.'</td>
            <td>'.$committee.'</td>
            <td>'.$webinarconduct.'</td>
            <td>'.$webinarattend.'</td>
            <td>'.$workshop.'</td>
            </tr>';
            ?>
          <?php
        }
      }
    else
    {  
          ?>
      <p>No Records found...</p>
      <?php
    }
      ?>
    <div class="topnav">
      <a href="view.php">search</a>


<button type="button" value="search"><a href="newpdf.php?id=$id">GENERATE PDF</a></button>

<button type="submit"><a href="index.php">LOGOUT</a></button>

    </div>
  </body>
</html>