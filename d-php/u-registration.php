<?php
require('../connect.php');
if(isset($_POST['delete'])){
	$user_name=$_POST['uname'];
	

	$delete=mysqli_query($con, "DELETE FROM `login` WHERE `user_name`='$user_name'");
	if($delete){
		echo "<script>window.open('../adm/manage-users.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>