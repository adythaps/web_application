<?php 
include('header.php');

if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='2'){
    header('location:dashboard.php');
    die();
}

require('db.php');
//for update query

$update_id=$_GET['uid'];

$query1="select * from orders where id = $update_id";
$run1=mysqli_query($con,$query1);
if(isset($_POST['update']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobileno=$_POST['mobileno'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $zip=$_POST['zip'];
  $item=$_POST['item'];
  $qty=$_POST['qty'];
  $payment=$_POST['payment'];
      $query="UPDATE `orders` SET `name`='$name',`email`='$email',`mobileno`='$mobileno',`address`='$address',`city`='$city',`state`='$state',`zip`='$zip',`item`='$item',`qty`='$qty',`payment`='$payment' WHERE `id`='$update_id'";
      $run_query=mysqli_query($con,$query);
      if($run_query)
      {
        ?>
        <div class="alert alert-success">Order Update!!!</div>
        <?php
        header('location:user_status.php?update=true');
            die();
      }
      else
      {
        echo "Order Not Update";
      }

}


?>
<div class="container">
        <div class="row">
            <div class="box">
                <div class="container-fluid">


    <?php 
while($data=mysqli_fetch_assoc($run1))
{
  
  ?>
     <form action="" method="POST">
                 <div class="form-row">
                    <div class="col-lg-12"><center><label>Please fill Shipping Details</label></center><br></div>
                   <div class="form-group col-md-6">
                      <label for="name">Full Name</label>
                     <input type="text" value="<?php echo $data['name'];  ?>" class="form-control" name="name" id="name" placeholder="Full Name" required="required" autofocus="autofocus">
                   </div>
                   <div class="form-group col-md-6">
                       <label for="email">Email</label>
                         <input type="email" class="form-control" value="<?php echo $data['email'];  ?>" name="email" id="email" placeholder="Email" required="required" autofocus="autofocus">
                   </div>
                   <div class="form-group col-md-6">
                      <label for="mobileno">Mobile No</label>
                     <input type="text" class="form-control" value="<?php echo $data['mobileno'];  ?>" name="mobileno" id="mobileno" placeholder="10-digit mobile number" required="required" autofocus="autofocus">
                   </div>
                </div>
               <div class="form-group col-md-6">
                 <label for="address">Address</label>
                 <input type="text" class="form-control"  value="<?php echo $data['address'];  ?>" id="address" name="address" placeholder="Address" required="required" autofocus="autofocus">
               </div>
 
               <div class="form-row">
                <div class="form-group col-md-6">
                 <label for="city">City</label>
                      <input type="text" class="form-control" value="<?php echo $data['city'];  ?>" name="city" id="city" required="required" autofocus="autofocus">
                </div>
                   <div class="form-group col-md-4">
                       <label for="state">State</label>
                          <select id="state" class="form-control"  name="state" id="state" required="required">
                          <option value="">Choose...</option>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chandigarh">Chandigarh</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                          <option value="Daman and Diu">Daman and Diu</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Lakshadweep">Lakshadweep</option>
                          <option value="Puducherry">Puducherry</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="Uttarakhand">Uttarakhand</option>
                          <option value="West Bengal">West Bengal</option>
                          </select>
                  </div>
                   <div class="form-group col-md-2">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" value="<?php echo $data['zip'];  ?>" name="zip" id="zip" required="required" autofocus="autofocus">
                   </div>
               </div>

               <div class="col-lg-12"><br><center><label>Please fill Order Details</label></center></div>
                  <div class="form-group col-md-8">
                       <label for="item">Product Name</label>
                          <select id="item" value="<?php echo $data['item'];  ?>" class="form-control" name="item" required="required">
                            <option value="">Select...</option>
                            <option value="Jacket">Jacket</option>
                            <option value="Belt">Belt</option>
                            <option value="Shoes">Shoes</option>
                            <option value="Hand Bags">Hand Bags</option>
                            <option value="Heels">Heels</option>
                            <option value="Travel Bags">Travel Bags</option>
                            <option value="Purse">Purse</option>
                           </select>
                  </div>
                   <div class="form-group col-md-4">
                       <label for="qty">Quantity</label>
                          <select id="qty" class="form-control" value="<?php echo $data['qty'];  ?>" name="qty" required="required">
                            <option value="">Choose...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                           </select>
                  </div>
                  <div class="form-group col-md-4">
                       <label for="payment">Payment Method</label>
                          <select id="payment" class="form-control" value="<?php echo $data['payment'];  ?>" name="payment" required="required">
                            <option value="">Choose...</option>
                            <option value="(COD) Cash On Delivery">(COD) Cash On Delivery</option>                                                   
                           </select>

                  </div>
                  <div>
                  <button type="submit" name="update" class="btn btn-primary col-md-12">Update Order</button></div>
                 
            </div>
             </form>



<?php } ?>
</div>
</div></div></div></div>



<?php
include('footer.php');?>