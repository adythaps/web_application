<?php 
include('header.php');

if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:user.php');
	die();
}
?>



<div class="container">
        <div class="row">
            <div class="box">
            	<div class="container-fluid">
<ol class="breadcrumb">
  <li class="breadcrumb-item">
	 <h3>Dashboard</h3>
	
  </li>
</ol>	


				

<hr>
<h1><center> <a href="dashboard_orders.php">
 ORDERS </center></h1> </a>
<hr><br>
<hr>
<h1><center> <a href="dashboard_payment.php">
 PAYMENTS </center></h1> </a>
<hr>
<br>
<hr>
<h1><center> <a href="dashboard_feedback.php">
 FEEDBACK </center></h1> </a>
<hr>


</div>
</div>
</div>
</div>
</div>
<?php include('footer.php')?>