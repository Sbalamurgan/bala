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
    <form action="detail_add.php" method="post">
        <div class="container">
          <h1>EMPLOYEE PERSONAL INFORMATION</h1>
          <hr></hr>
          <b>EMPLOYEE IMAGE</b>


  
<hr></hr>  
<table>
          <tr>
          <td><label for="wid"><b>EMPLOYEE ID</b></label></td>
          <td><input type="text" placeholder="Enter employee ID" name="wid" id="wid"></td></td>
          </tr>

          <tr>
          <td><label for="name"><b>EMPLOYEE NAME</b></label></td>
          <td><input type="text" placeholder="Enter employee name" name="name" id="name"></td>
          </tr>

          <tr>
          <td><label for="lname"><b>EMPLOYEE LAST NAME</b></label></td>
          <td><input type="text" placeholder="Enter employee's last name " name="lname" id="lname"></td>
          </tr>

          <tr>
          <td><label for="emp_dob"><b>EMPLOYEE'S DOB</b></label></td>
          <td><input type="date" placeholder="Enter employee's DOB " name="dob" id="dob"></td>      
          </tr>
          
          <tr>
          <td><label for="fname"><b>FATHER NAME</b></label></td>
          <td><input type="text" placeholder="Enter Father's name" name="fathername" id="fathername"></td>      
          </tr>

          <tr>
          <td><label for="blood"><b>BLOOD GROUP</b></label></td>
         
         <td><select name="bloodgroup" id="bloodgroup">
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
          <td><input type="radio" value="Male"id="gender" name="gender">Male</td>
          <td><input type="radio" value="Female"id="gender" name="gender">Female</td>

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
</table>

<br><br>
    <button type="submit" class="registerbtn"><a href="detailview.php">SUBMIT</button>

</div>
  </form>
</center> 
</body>
</html>