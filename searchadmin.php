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
      $dbname = "emp";
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

</tr>';

      $result = $conn->query($sql);
      if ($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        { //fetches all the tuple's data
            
        
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
          
          </tr>';
        }
      }
          ?>
        

    <div class="topnav">
      <a href="detailview.php">search</a>
<button type="submit" value="search"><a href="pdf.php">GENERATE PDF</a></button>

    </div>
  </body>
</html>