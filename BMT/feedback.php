<?php 
include('header.php');

if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='2'){
  header('location:dashboard.php');
  die();
}
?>
<?php
if(isset($_POST['submit'])){
$score = $_POST['score'];
$name = $_POST['name'];
$email = $_POST['email'];
$feedback= $_POST['suggestion'];
$conn = mysqli_connect("localhost", "root","", "bmt");
$query ="insert into feedback(name, email,score, feedback)values('$name', '$email', '$score', '$feedback')";
$result = mysqli_query($conn, $query);
if($result)
{ 
  header('location:user.php?feedback=true');
  die();}
else
die("Something terrible happened. Please try again. ");
}
?>


<body>
 <div class="container">
        <div class="row">
            <div class="box">
                <div class="container-fluid">
 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <h3> <a href="">Feedback</a></h3>
    </li>
 </ol>
<div class="col-lg-12">
 <form action="" method="POST">
 <br><br><br>
 <div class="form-group col-md-6">
                      <label for="name">Full Name</label>
                     <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required="required" autofocus="autofocus">
                   </div>
                   <div class="form-group col-md-6">
                       <label for="email">Email</label>
                         <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required" autofocus="autofocus">
                   </div>
                   <br>
 <div><p>What do you think about our Service?</p></div>
 <div>
   <div >
    
     <input type="radio" name="score" value="Bad"> Bad
   </div>
   <div >
     
     <input type="radio" name="score" value="Average"> Okay
   </div>
   <div >
     
     <input type="radio" name="score" value="Good"> Good
   </div>

 </div>
 
 <p>Do you have any suggestion for us? </p>
 <textarea name=" suggestion" rows="15" cols="144"></textarea>
 <div>
  <button type="submit" name="submit" class="btn btn-primary col-md-12">Submit Feedback</button></div>
 
</form>

</div></div></div></div></div></div>
<?php include('footer.php')?>