<?php

include('header.php');

if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:user.php');
	die();
}


require('db.php');




    if(isset($_GET['uid']))
    {
      $deleteid=$_GET['uid'];
      
     $query2="delete from orders where id = $deleteid";
      $run_query2=mysqli_query($con,$query2);
      if($run_query2)
      {header("location:dashboard_orders.php?delete=true");
        ?>
        <div class="alert alert-success">Order Deleted!!!</div>
        <?php
      }
      else
      {
        echo "Order not Deleted!!!";
      }
    }
?></div><br><br><br><br><br><br><br><br><br>
<?php
include('footer.php');
?>