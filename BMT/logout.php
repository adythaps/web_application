<?php
session_start();
unset($_SESSION['ROLE']);
unset($_SESSION['IS_LOGIN']);
header("location:index.php?logout=true");
die();
?>