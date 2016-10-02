<?php
session_start();
if (isset($_SESSION['userSession'])) {
	
 header("Location: home.php");
}
require_once 'dbcon.php';

if(isset($_POST['btn-signup'])) {
 
 $uname = strip_tags($_POST['username']);
 $email = strip_tags($_POST['email']);
 $upass = strip_tags($_POST['password']);
 
 $uname = $link->real_escape_string($uname);
 $email = $link->real_escape_string($email);
 $upass = $link->real_escape_string($upass);
 
 $hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
 
 $check_email = $link->query("SELECT email FROM tbl_user WHERE email='$email'");
 $count=$check_email->num_rows;
 
 if ($count==0) {
  
  $query = "INSERT INTO tbl_user(username,email,password) VALUES('$uname','$email','$hashed_password')";

  if ($link->query($query)) {
		echo 'Dit brugerlogin er oprettet!';
	}else{
		echo 'noget gik galt, tjek felterne og prøv igen'  . mysqli_error($link);
	}
 }
 
 $link->close();
}
?>
       
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Projekt 2 - Opgave 2 - Login</title>
<link rel="stylesheet" type="text/css" href="login-style.css">
</head> 

<div class="signin-form">

 <div class="container">
     
        
       <form class="login-formular" method="post" id="register-form">
      
        <h1>Opret Bruger</h1>       
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Brugernavn" name="username" required  />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="E-mail" name="email" required  />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>
    
        
        <div class="form-group">
           <input style="background-color:#C8C1C1; width: 40%; color: white; margin-bottom: 5%; cursor: pointer; margin-top: 2%;"  type="submit" name="btn-signup" value="Opret Bruger"> 
  <br>
           <a href="login.php">Har du allerede et login? så tryk HER</a>
   
       </div>
      
      </form>

    </div>
    
</div>

</body>
</html>