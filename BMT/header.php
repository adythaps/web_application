<?php
session_start();


if(!isset($_SESSION['IS_LOGIN'])){
	header('location:login.php');
	die();

}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Business Management Tool</title>
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
		 <?php require_once 'nav.php'; ?> 
<?php
	if (isset($_GET["logout"])) {		
		if ($_GET["logout"] == "true") { ?>			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div> 
	<?php
		}
	}
	?>



<?php
	if (isset($_GET["login"])) {		
		if ($_GET["login"] == "true") { ?>			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged in  the system.</strong>
			</div> 
	<?php
		}
	}
	?>



<div class="container">
            <div class="row">      
                 <div class="col-lg-12 text-center">
      <!-- Navbar --> 
	<nav class="navbar navbar-default" role="navigation">	       
         <div id="wrapper">
       
         <ul class="nav navbar-nav pager">
            <?php if($_SESSION['ROLE']==1){?>
			<li class="nav-item">
               <a class="nav-link" href="dashboard.php">
               <span>Dashboard</span>
               </a>
            </li>

          
	    <li class="nav-item">
               <a class="nav-link" href="logout.php">
               <span>Logout</span></a>
            </li>
			<?php } ?>

			
			<?php if($_SESSION['ROLE']==2){?> <?php
	if (isset($_GET["logout"])) {		
		if ($_GET["logout"] == "true") { ?>			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div> 
	<?php
		}
	}
	?>

            <li class="nav-item">
               <a class="nav-link" href="user.php">
               <span>User</span></a>
            </li>
	    <li class="nav-item">
               <a class="nav-link" href="logout.php">
               <span>Logout</span></a>
            </li>

			<?php } ?>
         </ul>
 </nav>
</div></div>

        