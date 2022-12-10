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
	$sql="select * from admin_user where username='$username' and password='$password'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['ROLE']=$row['role'];
		$_SESSION['IS_LOGIN']='yes';
		if($row['role']==1){
			header('location:dashboard.php?login=true');
			die();
		}if($row['role']==2){
			header('location:user.php?login=true');
			die();
		}
	}else{
		$error='Please enter correct login details';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Business Management Tool - Login</title>
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
                        <strong>Login</strong>
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
				  <?php echo $error?>

               </form> 
		
		
		<br><div class="form-group col-lg-12">
						<a href="register.php"><button type="submit" class="btn btn-default"> Not a Member? Register here</button></a>
					</div>




            </div>
         </div>
      </div>
   </div> 
    <?php
       require('footer.php');
    ?>  
   </body>
</html>