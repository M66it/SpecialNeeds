<?php
session_start();
if(isset($_GET['vkey'])){
	$vkey = $_GET['vkey'];
	$conn = mysqli_connect('localhost', 'root', '', 'specialneeds');
	$sql = "select verified,vkey from user where verified = 0 and vkey ='$vkey' limit 1";
	$result1 = mysqli_query($conn, $sql);
	$result2 = mysqli_num_rows($result1);
	if($result2 == 1){ 
	$_SESSION['verifiedyes'] = "yes";
	$update = mysqli_query($conn,"update user set verified = 1 where vkey = '$vkey' limit 1");
	}else{
		$_SESSION['verifiedno'] = "yes";
	}
	header('location: index.php');
}else{
	header('location: index.php');
}
?>