<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='2'){
  header('location:dashboard.php');
  die();
}
require('db.php');
if(isset($_POST['submit']))
{ 
  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $zip=$_POST['zip'];
  $state=$_POST['state'];
  $nameoncard=$_POST['nameoncard'];
  $cardno=$_POST['cardno'];
  $month=$_POST['month'];
  $cvv=$_POST['cvv'];
  $year=$_POST['year'];
        $query="INSERT INTO `payment`( `nameoncard`, `cardno`, `month`, `cvv`, `year`, `fullname`, `email`, `address`, `city`, `zip`, `state`) VALUES ('$nameoncard','$cardno', '$month', '$cvv', '$year', '$fullname', '$email', '$address', '$city', '$zip', '$state')";
      
      $run_query=mysqli_query($con,$query);
      if($run_query)
      { header('location:user.php?placed=true');
            die();
        ?>
        <div class="alert alert-success">Order Placed Successfully..</div>
        <?php 
      }
      else
      {
        echo "Order  Not Placed !!!";
      }
}


?>





<div class="container">
        <div class="row">
            <div class="box">
                <div class="container-fluid">
 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <h3> <a href="">Payment Details</a></h3>
    </li>
 </ol>
       <div class="col-lg-12">
      <form action="" method="POST">       
        <div class="col-lg-12">
            <h3>Billing Address</h3></div>
            <div class="form-group col-md-6">
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Name" autofocus="autofocus"></div>
            <div class="form-group col-md-6">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="abc@example.com" autofocus="autofocus"></div>
            <div class="form-group col-md-6">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" class="form-control" id="adr" name="address" placeholder="123 New Delhi" autofocus="autofocus"></div>
            <div class="form-group col-md-6">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Delhi" autofocus="autofocus"></div>
          
            <div class="form-group col-md-6">
              
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="Delhi">
              </div>
              <div class="form-group col-md-6">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="110001">
              </div>
            

          <div class="col-lg-12">
            <h3>Payment</h3></div>
            <div class="form-group col-md-6">
            <label for="fname">Accepted Cards</label>
            <div class="pnx-msg-icon pnx-icon-msg-warning">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div></div>

            <div class="form-group col-md-6">
            <label for="cname">Name on Card</label>
            <input type="text" class="form-control" id="cname" name="nameoncard" placeholder="Abc xyz">
            <label for="ccnum">Credit card number</label>
            <input type="text" class="form-control" id="cardno" name="cardno" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" class="form-control" id="month" name="month" placeholder="December">
            
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="2026">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" placeholder="***">
              </div>
            </div>
          </div>
          
        </div>

        
        <div>
                  <button type="submit" name="submit" class="btn btn-primary col-md-12">Order place</button></div>
                 
            </div>
       
      </form></div></div></div></div></div>
    </div>
  </div>
  </div>
</div>
</div>
<?php include('footer.php')?>