<?php 
include('header.php');

if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='2'){
	header('location:dashboard.php');
	die();
}


require('db.php');
//fetch data from database

$query1="select * from orders";
$run1=mysqli_query($con,$query1);
//approve

    if(isset($_GET['uid']))
    {
      $approveid=$_GET['uid'];
    
     $query2="update `orders` SET `status`='Cancel' where `id` = $approveid";
      $run_query2=mysqli_query($con,$query2);
      if($run_query2)
      {
        ?>
        <div class="alert alert-success">Order Cancelled!!!</div>
        <?php
      }
      else
      {
        echo "NOT APPROVED!";
      }
    }    
?>

<?php
  if (isset($_GET["update"])) {   
    if ($_GET["update"] == "true") { ?>     
      <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Order Record updated!!!</strong>
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
   <h3>Orders</h3>
  
  </li>
</ol> 


        

<hr>
<h1><center> ORDERS</center></h1>
<hr>
<table class="table table-bordered">
  <tr>
    <th>Name</th>
      <th>Email</th>
       <th>Mobile Number</th>
       <th>Address</th>
      <th>City</th>
       <th>State</th>
      <th>Zip Code</th>
      <th>Product details</th>
       <th>Quantity</th>
        <th>Payment Method</th>
         <th>Order No</th>
          <th>Payment Status</th>
           <th>Action</th>
  </tr>
  <?php 
while($data=mysqli_fetch_assoc($run1))
{
  ?>
    <tr>
      <td><?php echo $data['name']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['mobileno']; ?></td>
      <td><?php echo $data['address']; ?></td>
      <td><?php echo $data['city']; ?></td>
      <td><?php echo $data['state']; ?></td>
      <td><?php echo $data['zip']; ?></td>
      <td><?php echo $data['item']; ?></td>
    <td><?php echo $data['qty']; ?></td>
    <td><?php echo $data['payment']; ?></td>
    <td><?php echo $data['order_no']; ?></td>
    <td><?php echo $data['status']; ?></td>
        <td>
      <a href="user_update.php?uid=<?php echo $data['id'];?>" class="btn btn-primary">Edit Details</a>
      <a href="user_status.php?uid=<?php echo $data['id'];?>" class="btn btn-danger">Cancel Order</a>
      
    </td>
  </tr>
<?php } ?>
</table>


</div>
</div>
</div>
</div>
</div>
<?php include('footer.php')?>