<?php
session_start();
if(isset($_SESSION['IS_LOGIN'])){
	header('location:dashboard.php');
	die();
}
?>
<?php
require('db.php');
$error='';

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

   $query = "SELECT * FROM admin_user WHERE username='$username'";
   $result = mysqli_query($con,$query);
   $num_row = mysqli_num_rows($result); 


   if($num_row<1)
   {  

	$sql="INSERT INTO admin_user (`username`,`password`,`role`) VALUES('$username','$password','2')";
	$res=mysqli_query($con,$sql);
	
    if($res){?>
            <div class="alert alert-success">signup completed!  <a href="login.php">Click here to Login</a></div>
        <?php
	}}else{?>
		      <div class="alert alert-danger">Username already in our system. Signup failed!</div>
          <?php
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Business Management Tool - Signup</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://www.geekzee.com/favicon.ico" type="image/x-icon">
    
     
       <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/salesmanagement.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  

   </head>
   <body>
	<div class="brand">Business Management Tool</div><br><br>
	 <!-- Navigation -->
    <?php require_once 'nav.php'; ?>
     <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
		
					<hr>
                    <h2 class="intro-text text-center">
                        <strong>Register</strong>
                    </h2>	
                   			 <hr>       

      
               <form method="post">
                  <div class="form-group">
                     <div class="form-label-group">
                        <input type="username" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                        <label for="username">Username</label>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="form-label-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                        <label for="inputPassword">Password</label>
                     </div>
                  </div>
                  <input type="submit" name="submit" class="btn btn-primary btn-block">
				 
               </form>
             <br>  <div class="form-group col-lg-12">
                  <a href="login.php"><button type="submit" class="btn btn-default"> Already a Member? Login here</button></a>
               </div>

            </div>
         </div>
      </div>
   </div> 

    <?php
       require('footer.php');
    ?>  
   