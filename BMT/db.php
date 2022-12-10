<?php
//Open a new connection to the MySQL server
$con=mysqli_connect("localhost","root","","bmt");

//Output any connection error
if ($con->connect_error) {
    die('Error : (' . $con->connect_errno . ') ' . $con->connect_error);
}
?>