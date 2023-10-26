<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="./adminsignup.css">
</head>

<body>
    <form action="admindb.php" method="post" name="myform" onsubmit="return allLetter()">
        <div class="container">
            <h1><center>CREATE YOUR ACCOUNT</center></h1>
            <hr>

            <label for="user_name"><b>Full Name</b></label><br>
            <input type="text" placeholder="Enter Your Name Here" name="user_name" id="user_name" required><br>
            
            <label for="email"><b>Email</b></label><br>
            <input type="email"  placeholder="Enter Your Email Here" name="user_mail" id="user_mail" required><br>

            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Your Password Here" name="user_password" id="user_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"required><br>

            
            <hr>
            <button type="submit" class="registerbtn">Register</button>
        </div>
        <div class="container signin">
            <p>Already have an account? <a href="./adminlogin.php"  >Login</a></p>
        </div>
    </form>

<!--Validation for Input for name-->

    <script>
      function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      /*if(document.getElementById('name').value.match(letters))
      {
        alert('Your name have accepted');
        document.getElementById('myform').submit();
        return true;
      }
      else
      {
        alert('Please input alphabets only');
        return false;
      }*/
      }
        </script>

</body>

</html>