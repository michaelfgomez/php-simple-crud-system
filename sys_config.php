<?php 
ob_start();
$con = mysqli_connect("localhost","root","","php-lego-system");
if(mysqli_connect_errno()){
	echo "Connection error " . mysqli_connect_errno();
}
 ?>
