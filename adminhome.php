<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="design.css">
<style>
.rectangle{
  padding: 60px;
  background-color: #063146;
  margin:100px;
  float: center;
  width:500px;
  height:100px;
  position: relative;
  text-align: center;
}
.rec{
  padding: 60px;
  background-color:#063146;
  margin:100px;
  float: center;
  width:500px;
  height:100px;
  position: relative;
  text-align: center;
}
        </style>
</head>
<body>
<title>STAFF PROFILE</title>
<div class="nav_bar">
        
</div>


<input type="checkbox" id="check">
        <label for="check">
        <i class="fa fa-bars" id="btn"></i>
        <i class="fa fa-window-close" id="cancel"></i>
</label>
<div class="sidebar"> 
        <header>PROFILE VISIT</header>
        <section>
        <ul>

        
                <li><a href="#"><i class="fa fa-qrcode"></i>All Employees</a></li>
                <li><a href="#"><i class="fa fa-male"></i>Current Employee</a></li>
                <li><a href="#"><i class="fa fa-user-times"></i>Past Employee</a></li>
                <li><a href="#add user"><i class="fa fa-question-circle"></i>#Add user</a></li>
                <li><a href="#"><i class="fa fa-gear"></i>Settings</a></li>
                <li><a href="login.php"><i class="fa fa-sign-out"></i>Sign out</a></li>

        </ul>
</section>
</div>
<a name="Add user">
<center>
<div class="rectangle">
        <a href="view.php"><i class="fa fa-user" style='font-size:48px;color:white'> Teaching Staff</i></a>
</div>
<div class="rec">
        <a href="detailview.php"><i class="fa fa-user-circle-o" style='font-size:48px;color:white'> Non-Teaching Staff</i></a>
</div>
</center>
</body>
</html>
