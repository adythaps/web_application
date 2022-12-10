
<?php 
include('header.php');

if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='2'){
	header('location:dashboard.php');
	die();
}
?>
<?php
    if (isset($_GET["placed"])) {       
        if ($_GET["placed"] == "true") { ?>         
            <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Order Placed Successfully</strong>
            </div> 
        <?php }}
        ?>

<?php
    if (isset($_GET["feedback"])) {       
        if ($_GET["feedback"] == "true") { ?>         
            <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Thank you for your Valuable feedback.</strong>
            </div> 
    <?php
        }
    }
    ?>
    

<div class="container">
        <div class="row">
            <div class="box">
            	<div class="container-fluid">
 <ol class="breadcrumb">
  <li class="breadcrumb-item">
	<h3> <a href="">User</a></h3>
  </li>
 </ol>		 
  <hr>
 <h1><center> <a href="user_orders.php">
 Place ORDER </center></h1> </a>
  <hr>
  <br>
  <hr>
 <h1><center> <a href="user_status.php">
  Order Status </center></h1> </a>
<hr>
<br>
<hr>
 <h1><center> <a href="feedback.php">
  Feedback </center></h1> </a>
<hr>


</div></div></div></div></div></div>
<!-- /.container-fluid -->
<?php include('footer.php')?>