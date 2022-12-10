<?php 
include('header.php');

if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:user.php');
	die();
}

require('db.php');
//fetch data from database

$query1="select * from payment";
$run1=mysqli_query($con,$query1);
//approve

    if(isset($_GET['uid']))
    {
      $approveid=$_GET['uid'];
    
     $query2="update `orders` SET `status`='APPROVED' where `id` = $approveid";
      $run_query2=mysqli_query($con,$query2);
      if($run_query2)
      {
        ?>
        <div class="alert alert-success">APPROVED!!!</div>
        <?php
      }
      else
      {
        echo "NOT APPROVED!";
      }
    }    
?>

<?php
  if (isset($_GET["delete"])) {   
    if ($_GET["delete"] == "true") { ?>     
      <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Order Record Deleted!!!</strong>
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
	 <h3>Payment</h3>
	
  </li>
</ol>	


				

<hr>
<h1><center> Payment Status</center></h1>
<hr>
<table class="table table-bordered">
  <tr>
    <th>S.No</th>
    <th>Name</th>
      <th>Email</th>
       <th>Address</th>
       <th>City</th>
      <th>State</th>
      <th>ZIP</th>
       <th>Name on card</th>
        <th>Card Number</th>
         <th>Expiry Month</th>
          <th>Expiry Year</th>
           <th>CVV</th>
  </tr>
  <?php 
while($data=mysqli_fetch_assoc($run1))
{
  ?>
    <tr>
      <td><?php echo $data['sno']; ?></td>
      <td><?php echo $data['fullname']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['address']; ?></td>
      <td><?php echo $data['city']; ?></td>
      <td><?php echo $data['state']; ?></td>
      <td><?php echo $data['zip']; ?></td>
      <td><?php echo $data['nameoncard']; ?></td>
    <td><?php echo $data['cardno']; ?></td>
    <td><?php echo $data['month']; ?></td>
    <td><?php echo $data['year']; ?></td>
    <td><?php echo $data['cvv']; ?></td>
        
  </tr>
<?php } ?>
</table>


</div>
</div>
</div>
</div>
</div>
<?php include('footer.php')?>