<?php      
     
    $servername = "localhost";  
    $username = "root";  
    $password = "";  
    $dbname ="login";  
      
    $con = mysqli_connect($servername, $username, $password, $dbname);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }   
    
    $user_mail=$_POST['user_mail'];
    $user_password=$_POST['user_password'];

        $sql = "select * from user where user_mail = '$user_mail' and user_password= '$user_password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
             
            header('location:home.php'); 
        }  
       
        else{  
            //echo '<h1>Unauthorized</h1>';
            header('location:login.php');  
        }
        
        ?>
