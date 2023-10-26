<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add Employee</title>
</head>
<body bgcolor="#ddd"><center>
    <form action="emp_add.php" method="post">
        <div class="container">
          <h1>EMPLOYEE PERSONAL INFORMATION</h1>
          <b>EMPLOYEE IMAGE</b>
  

          <hr></hr>
          <h2>Name of the Department</h2>
          <select name="emp_dep" id="emp_dep">
          <option value="select">SELECT</option>
          <option value="computer science">COMPUTER SCIENCE</option>
          <option value="mathematics">MATHEMATICS</option>
          <option value="bio chemistry">BIO CHEMISTRY</option>
          <option value="micro biology">MICRO BIOLOGY</option>
          <option value="english">ENGLISH </option>
          <option value="b.com">B.COM(PA)</option>

</select>

          <br>
          
          <table>
         
          <tr>
          <td><label for="emp_id"><b>EMPLOYEE ID</b></label></td>
          <td><input type="text" placeholder="Enter employee ID" name="emp_id" id="emp_id"></td></td>
          </tr>

          <tr>
          <td><label for="emp_name"><b>EMPLOYEE NAME</b></label></td>
          <td><input type="text" placeholder="Enter employee name" name="emp_name" id="emp_name"></td>
          </tr>

          <tr>
          <td><label for="emp_lname"><b>EMPLOYEE LAST NAME</b></label></td>
          <td><input type="text" placeholder="Enter employee's last name " name="emp_lname" id="emp_lname"></td>
          </tr>

          <tr>
          <td><label for="emp_dob"><b>EMPLOYEE'S DOB</b></label></td>
          <td><input type="date" placeholder="Enter employee's DOB " name="emp_dob" id="emp_dob"></td>      
          </tr>
          
          <tr>
          <td><label for="fname"><b>FATHER NAME</b></label></td>
          <td><input type="text" placeholder="Enter Father's name" name="fname" id="fname"></td>      
          </tr>

          <tr>
          <td><label for="blood"><b>BLOOD GROUP</b></label></td>
         
         <td><select name="blood" id="blood">
    <option value="select">SELECT</option>  
    <option value="A+">A Positive</option>
    <option value="A-">A Negative</option>
    <option value="A">A Unknown</option>
    <option value="B">B Positive</option>
    <option value="B-">B Negative</option>
    <option value="B">B Unknown</option>
    <option value="AB+">AB Positive</option>
    <option value="AB-">AB Negative</option>
    <option value="AB">AB Unknown</option>
    <option value="O+">O Positive</option>
    <option value="O-">O Negative</option>
    <option value="O">O Unknown</option>
    <option value="?">Unknown</option>
</select>
</td>
</tr>

          <tr>
          <td><label for="gender"><b>GENDER </b></label></td>
          <td><input type="radio" value="Male"id="gender" name="gender">Male
          <input type="radio" value="Female"id="gender" name="gender">Female</td>

          </tr>

<tr>
      <td><label for="Address"><b>ADDRESS</b></label></td>
<td><textarea id="address" name="address" rows="4" cols="20">
</textarea></td>
</tr>


          <tr>
        
          <td><label for="status"><b>MARITAL STATUS</b></label></td> &nbsp;&nbsp;
     
          <td><select name="status" id="status">
          <option value="select">SELECT</option>
          <option value="Yes">YES</option>
          <option value="No">NO</option>
         </select>
</td>
          </tr>

          
          <tr>
        
          <td><label for="religion"><b>RELIGION</b></label></td> &nbsp;
         
          <td><select name="rel" id="rel">
          <option value="select">SELECT</option>
          <option value="hindu">HINDU</option>
          <option value="christian">CHRISTIAN</option>
          <option value="muslim">MUSLIM</option>

         </select>
</td>
          </tr>

          <tr>
        
          <td><label for="caste"><b>CASTE</b></label></td> 
         
          <td><select name="caste" id="caste">
          <option value="select">SELECT</option>
          <option value="general">GENERAL</option>
          <option value="obc">OBC</option>
          <option value="bc">BC</option>
          <option value="mbc">MBC</option>
          <option value="sc">SC</option>
          <option value="st">ST</option>
          <option value="others">OTHERS</option>

         </select>
</td>
          </tr>


<br>
<tr>
<td><h1>ACADEMIC INFORMATION</h1></td>
</tr>

<tr>
<td><h1>SSLC Information</h1></td>
</tr>

<tr>
          <td><label for="iname"><b>NAME OF THE INSTITUTE</b></label></td>
          <td><input type="text" placeholder="Enter Institute name" name="iname" id="iname"></td>
          </tr>

          <tr>
          <td><label for="syear"><b>YEAR OF PASSING</b></label></td>
          <td><input type="text" placeholder="year of passing" name="syear" id="syear"></td>
          </tr>
  
          <tr>
          <td><label for="spercentage"><b>PERCENTAGE</b></label></td>
          <td><input type="text" placeholder="percentage" name="spercentage" id="spercentage"></td>
          </tr>


          <tr>
<td><h1>HSC Information</h1></td>
</tr>

<tr>
          <td><label for="institutename"><b>NAME OF THE INSTITUTE</b></label></td>
          <td><input type="text" placeholder="Enter Institute name " name="ins_name" id="ins_name"></td>
          </tr>

          <tr>
          <td><label for="hyear"><b>YEAR OF PASSING</b></label></td>
          <td><input type="text" placeholder="year of passing " name="hyear" id="hyear"></td>
          </tr>
  
          <tr>
          <td><label for="hpercentage"><b>PERCENTAGE</b></label></td>
          <td><input type="text" placeholder="percentage" name="hpercentage" id="hpercentage"></td>
          </tr>

          <tr>
       <td><h1>Bachelor Degree</h1></td>
      </tr>
      <tr>
          <td><label for="ug"><b>UG</b></label></td>
         
         <td><select name="ug" id="ug">
        <option value="select">SELECT</option>  
       <option value="B.Sc">B.Sc</option>
        <option value="BA">BA</option>
        <option value="B.Com">B.Com</option>
        <option value="BBA">BBA</option>
        <option value="BCA">BCA</option>
        <option value="BE">BE</option>
        <option value="B.Tech">B.Tech</option>
</select>
</td>
</tr>

<tr>
          <td><label for="Department"><b>DEPARTMENT</b></label></td>
         
         <td><select name="department" id="department">
        <option value="select">SELECT</option>  
        <option value="computer science">COMPUTER SCIENCE</option>
        <option value="mathematics">MATHEMATICS</option>
        <option value="biochemistry">BIOCHEMISTRY</option>
        <option value="microbiology">MICROBIOLOGY</option>
        <option value="english">ENGLISH</option>
        <option value="personal accounting">PERSONAL ACCOUNTING</option>
        <option value="others">OTHERS</option>
</select>
</td>
</tr>

<tr>
          <td><label for="inname"><b>NAME OF THE INSTITUTE</b></label></td>
          <td><input type="text" placeholder="Enter Institute name " name="inname" id="inname"></td>
          </tr>

          <tr>
          <td><label for="byear"><b>YEAR OF PASSING</b></label></td>
          <td><input type="text" placeholder="year of passing " name="byear" id="byear"></td>
          </tr>
  
          <tr>
          <td><label for="bpercentage"><b>PERCENTAGE</b></label></td>
          <td><input type="text" placeholder="percentage" name="bpercentage" id="bpercentage"></td>
          </tr>

          <tr>
       <td><h1>Major Degree</h1></td>
      </tr>

      <tr>
          <td><label for="pg"><b>PG</b></label></td>
         
         <td><select name="pg" id="pg">
        <option value="select">SELECT</option>  
       <option value="M.Sc">M.Sc</option>
        <option value="MA">MA</option>
        <option value="M.Com">M.Com</option>
        <option value="B.Ed">B.Ed</option>
        <option value="ME">ME</option>
        <option value="B.Tech">B.Tech</option>
</select>
</td>
</tr>

      <tr>
          <td><label for="pdepartment"><b>DEPARTMENT</b></label></td>
         
         <td><select name="pdepartment" id="pdepartment">
        <option value="select">SELECT</option>  
        <option value="computer science">COMPUTER SCIENCE</option>
        <option value="mathematics">MATHEMATICS</option>
        <option value="biochemistry">BIOCHEMISTRY</option>
        <option value="microbiology">MICROBIOLOGY</option>
        <option value="english">ENGLISH</option>
        <option value="personal accounting">PERSONAL ACCOUNTING</option>
        <option value="others">OTHERS</option>
</select>
</td>
</tr>

<tr>
          <td><label for="inst_name"><b>NAME OF THE INSTITUTE</b></label></td>
          <td><input type="text" placeholder="Enter Institute name " name="inst_name" id="inst_ame"></td>
          </tr>

          <tr>
          <td><label for="pyear"><b>YEAR OF PASSING</b></label></td>
          <td><input type="text" placeholder="year of passing " name="pyear" id="pyear"></td>
          </tr>
  
          <tr>
          <td><label for="ppercentage"><b>PERCENTAGE</b></label></td>
          <td><input type="text" placeholder="percentage" name="ppercentage" id="ppercentage"></td>
          </tr>

          <tr>
       <td><h1>QUALIFICATION</h1></td>
      </tr>
      
      <tr>
          <td><label for="Additional courses"><b>ADDITIONAL COURSES</b></label></td>
         
         <td><select name="addcourse" id="addcourse">
        <option value="select">SELECT</option>  
        <option value="Phd">PHD</option>
        <option value="net">NET</option>
        <option value="zet">ZET</option>
        <option value="gate">GATE</option>
        <option value="cat">CAT</option>
        </select>
</td>
</tr>

<tr>
          <td><label for="Online courses"><b>ONLINE COURSES</b></label></td>
         
         <td><select name="oncourse" id="oncourse">
        <option value="select">SELECT</option>  
        <option value="nptel">NPTEL</option>
        <option value="coursera">COURSERA</option>
        <option value="examveda">EXAMVEDA</option>
        <option value="others">OTHERS</option>

        </select>
</td>
</tr>

<tr>
<td><label for="course certificate"><b>COURSE CERTIFICATE</b></label></td>
          <td><input type="file" name="imagefile" id="imagefile"></td>
          </tr>

<br>
<tr>
  <td><h1>OTHERS</h1></td>
</tr>
<tr>
 <td><label for="committee"><b>COMMITTEE</b></label></td> 

 <td><select name="committee" id="committee">
        <option value="select">SELECT</option>  
        <option value="transport">TRANSPORT</option>
        <option value="a/c">A/C</option>
        <option value="finearts">FINEARTS</option>
        <option value="iv">IV</option>
        <option value="placement">PLACEMENT</option>
        </select>
</td>
</tr>
     

    <tr>
   <td><label for="webinarconduct"><b>NUMBER OF WEBINAR CONDUCTED</b></label></td> 
     <td><input type="text" name="webinarconduct" id="webinarconduct"></td>
    </tr>

    <tr>
    <td "><label for="webinarattend"><b>NUMBER OF WEBINAR ATTENDED</b></label></td>
    <td><input type="text" name="webinarattend" id="webinarattend"></td>
    </tr>

    <tr>
    <td "><label for="workshop"><b>NUMBER OF WORKSHOP CONDUCTED</b></label></td> 
    <td><input type="text" name="workshop" id="workshop"></td>
    </tr>
  </table>

    <br><br>
    <button type="submit" class="registerbtn">submit</button>

    </div>
  </form>
</center> 
</body>
</html>



