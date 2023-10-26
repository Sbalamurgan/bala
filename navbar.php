<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100;
  background-color:orange;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 2px;
  color: black;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: white;
}

.active {
  background-color:orange;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
</head>
<body bgcolor="wheat">

<div class="navbar">
  <a class="active" href="#"><i class="fa fa-envelope"></i> principal@krcollege.net</a> 
  <a class="active" href="#"><i class="fa fa-phone"></i> 04632-222806,222981</a> 

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adminsignup.php"><i class="fa fa-fw fa-user"></i> Admin Login</a>
<a href="signup.php"><i class="fa fa-fw fa-user"></i> User Login</a>
</div>


</body>
</html>