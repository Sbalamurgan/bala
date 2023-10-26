
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./login.css">
</head>

<body>
    <form method="post" action="authenticate.php" name="myform">
        <div class="container">
            <h1>Log In</h1>

            <hr>
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="user_mail" id="user_mail" ><br/>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="user_password" id="user_password" >
            <hr>

            <button type="submit" class="registerbtn" onclick="validate();"> Sign In</button>
        </div>
    </form>
    <script>
        function validate()
{
    
    let x=document.forms["myForm"]["user_name"].value;
    let y=document.forms["myForm"]["user_mail"].value;
    let z=document.forms["myForm"]["user_password"].value;
   
    if(x==""||y==""||z=="")
    {
        alert("Please don't leave the fields empty, Enter all the fields");
        return false;
    }
    if(!isNaN(x))
    {
        alert("Please enter a valid name");
        return false;
    }
}
    </script>
</body>
</html>
