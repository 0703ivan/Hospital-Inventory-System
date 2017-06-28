<?php
require('../connect.php');
if(isset($_POST['update'])){
	$user_name=$_POST['uname'];
	$password=$_POST['password'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$previlage=$_POST['previlage'];

	$query = mysqli_query($con, "UPDATE `login` SET `password`='$password',`fname`='$fname',`lname`='$lname',`previlage`='$previlage' WHERE `user_name`='$user_name'");
	if($query){
		echo "<script>window.open('../adm/manage-users.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>