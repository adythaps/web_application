<?php 
include('header.php');

if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:user.php');
	die();
}

require('db.php');
//fetch data from database

$query1="select * from feedback";
$run1=mysqli_query($con,$query1);
//approve
  
?>

<div class="container">
        <div class="row">
            <div class="box">

<div class="container-fluid">
<ol class="breadcrumb">
  <li class="breadcrumb-item">
	 <h3>Feedback</h3>
	
  </li>
</ol>	


				

<hr>
<h1><center> Users Feedback</center></h1>
<hr>
<table class="table table-bordered">
  <tr>
    <th>Serial Number</th>
    <th>Name</th>
      <th>Email</th>
       <th>Rating</th>
      <th>Feedback</th>
       
  </tr>
  <?php 
while($data=mysqli_fetch_assoc($run1))
{
  ?>
    <tr>
      <td><?php echo $data['sno']; ?></td>
      <td><?php echo $data['name']; ?></td>
      <td><?php echo $data['email']; ?></td>      
      <td><?php echo $data['score']; ?></td>
      <td><?php echo $data['feedback']; ?></td>
      
       
  </tr>
<?php } ?>
</table>


</div>
</div>
</div>
</div>
</div>
<?php include('footer.php')?>