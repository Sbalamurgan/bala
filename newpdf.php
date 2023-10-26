


<?php
 $dbHost     = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbName     = "employee";
 $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
 mysqli_select_db($conn,'users');
 $result = mysqli_query($conn,"SELECT * FROM users");
 while($row = mysqli_fetch_array($result))
 {
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

  
  $pdf->cell(90,10,'EMPLOYEE DEP',1,0);
  $pdf->cell(90,10,$emp_dep,1,1);

  $pdf->cell(90,10,'EMPLOYEE ID',1,0);
  $pdf->cell(90,10,$emp_id,1,1);

  $pdf->cell(90,10,'EMPLOYEE NAME',1,0);
  $pdf->cell(90,10,$emp_name,1,1);

  $pdf->cell(90,10,'EMPLOYEE LAST NAME',1,0);
  $pdf->cell(90,10,$emp_lname,1,1);

  $pdf->cell(90,10,'DOB',1,0);
  $pdf->cell(90,10,$emp_dob,1,1);

  $pdf->cell(90,10,'FATHER NAME',1,0);
  $pdf->cell(90,10,$fname,1,1);

  $pdf->cell(90,10,'BLOOD',1,0);
  $pdf->cell(90,10,$blood,1,1);

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

//$pdf->Cell(190,10,'SSLC INFORMATION',1,0,"C");

$pdf->Cell(90,10,"SCHOOL NAME",1,0);
$pdf->Cell(90,10,$iname,1,1);

$pdf->Cell(90,10,"YEAR OF PASSING",1,0);
$pdf->Cell(90,10,$syear,1,1);

$pdf->Cell(90,10,"PERCENTAGE",1,0);
$pdf->Cell(90,10,$spercentage,1,1);


//$pdf->Cell(190,10,'HSC INFORMATION',1,0,"C");

$pdf->Cell(90,10,"SCHOOL NAME",1,0);
$pdf->Cell(90,10,$ins_name,1,1);

$pdf->Cell(90,10,"YEAR OF PASSING",1,0);
$pdf->Cell(90,10,$hyear,1,1);

$pdf->Cell(90,10,"PERCENTAGE",1,0);
$pdf->Cell(90,10,$hpercentage,1,1);


//$pdf->Cell(190,10,'HIGHER EDUCATION',1,0,"C");

$pdf->Cell(90,10,"UG",1,0);
$pdf->Cell(90,10,$ug,1,1);

$pdf->Cell(90,10,"DEPARTMENT",1,0);
$pdf->Cell(90,10,$department,1,1);


$pdf->Cell(90,10,"INSTITUTE NAME",1,0);
$pdf->Cell(90,10,$inname,1,1);

$pdf->Cell(90,10,"YEAR OF PASSING",1,0);
$pdf->Cell(90,10,$byear,1,1);

$pdf->Cell(90,10,"PERCENTAGE",1,0);
$pdf->Cell(90,10,$bpercentage,1,1);

//$pdf->Cell(190,10,'HIGHER EDUCATION',1,0,"C");

$pdf->Cell(90,10,"PG",1,0);
$pdf->Cell(90,10,$pg,1,1);

$pdf->Cell(90,10,"DEPARTMENT",1,0);
$pdf->Cell(90,10,$pdepartment,1,1);


$pdf->Cell(90,10,"INSTITUTE NAME",1,0);
$pdf->Cell(90,10,$inst_name,1,1);

$pdf->Cell(90,10,"YEAR OF PASSING",1,0);
$pdf->Cell(90,10,$pyear,1,1);

$pdf->Cell(90,10,"PERCENTAGE",1,0);
$pdf->Cell(90,10,$ppercentage,1,1);

$pdf->Cell(90,10,"ADDITIONAL COURSES",1,0);
$pdf->Cell(90,10,$addcourse,1,1);

$pdf->Cell(90,10,"ONLINE COURSES",1,0);
$pdf->Cell(90,10,$oncourse,1,1);

$pdf->Cell(90,10,"IMAGE FILE",1,0);
$pdf->Cell(90,10,$imagefile,1,1);

$pdf->Cell(90,10,"COMMITTEE",1,0);
$pdf->Cell(90,10,$committee,1,1);

$pdf->Cell(90,10,"WEBINAR CONDUCT",1,0);
$pdf->Cell(90,10,$webinarconduct,1,1);

$pdf->Cell(90,10,"WEBINAR ATTEND",1,0);
$pdf->Cell(90,10,$webinarattend,1,1);

$pdf->Cell(90,10,"WORKSHOP",1,0);
$pdf->Cell(90,10,$workshop,1,1);

  
  $pdf->output();
  ob_end_flush();
}
  ?>
