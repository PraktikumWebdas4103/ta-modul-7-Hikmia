<?php
include_once 'connect.php';

if (isset($_GET['nim'])) {
$nim	= $_GET['nim'];
$sql 	= "delete from data where nim='$nim'";
$query_success	= mysqli_query($con,$sql);
if ($query_success) {
	header('location:tampil.php');
}else{
	die(mysqli_error($con));
	}
}
?>