<?php
require('../connect.php');
if(isset($_POST['user'])){
	$user_name=$_POST['uname'];
	$password=$_POST['password'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$previlage=$_POST['previlage'];
	
	$query = mysqli_query($con, "INSERT INTO `login`(`user_name`,`password`,`fname`,`lname`,`previlage`)
		VALUES('$user_name','$password','$fname','$lname','$previlage')");
	if($query){
		echo "<script>window.open('../adm/manage-users.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>