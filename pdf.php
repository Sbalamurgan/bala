
<?php
 $dbHost     = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbName     = "emp";
 $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
 mysqli_select_db($conn,'users');
 $result = mysqli_query($conn,"SELECT * FROM users");
 while($row = mysqli_fetch_array($result))
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
  
  //  echo ($id);
  ob_start();
  require("fpdf.php");
  $pdf=new FPDF('p','mm','A4');
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',12);
  $pdf->cell(151);
  //$pdf->cell(39,50,'photo',1,0,'C');
  $pdf->Ln(10);
  
  
  $pdf->cell(90,10,'ID',1,0);
  $pdf->cell(90,10,$id,1,1);

  $pdf->cell(90,10,'EMPLOYEE ID',1,0);
  $pdf->cell(90,10,$w_id,1,1);

  $pdf->cell(90,10,'EMPLOYEE NAME',1,0);
  $pdf->cell(90,10,$name,1,1);

  $pdf->cell(90,10,'EMPLOYEE LAST NAME',1,0);
  $pdf->cell(90,10,$lname,1,1);

  $pdf->cell(90,10,'DOB',1,0);
  $pdf->cell(90,10,$dob,1,1);

  $pdf->cell(90,10,'FATHER NAME',1,0);
  $pdf->cell(90,10,$fathername,1,1);

  $pdf->cell(90,10,'BLOOD',1,0);
  $pdf->cell(90,10,$bloodgroup,1,1);

  $pdf->cell(90,10,'GENDER',1,0);
  $pdf->cell(90,10,$gender,1,1);

  $pdf->cell(90,10,'ADDRESS',1,0);
  $pdf->cell(90,10,$address,1,1);

  $pdf->cell(90,10,'STATUS',1,0);
  $pdf->cell(90,10,$status,1,1);

  $pdf->cell(90,10,'RELIGION',1,0);
  $pdf->cell(90,10,$rel,1,1);

  $pdf->Cell(90,10,"CASTE",1,0);
$pdf->Cell(90,10,$caste,1,1);


  
  $pdf->output();
  ob_end_flush();
}
  

