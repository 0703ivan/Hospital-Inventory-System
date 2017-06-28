<?php
require('../connect.php');
if(isset($_POST['delete'])){
	$staff_id=$_POST['staff_id'];
	
	$delete=mysqli_query($con, "DELETE FROM `staff` WHERE `staff_id`='$staff_id'");
	if($delete){
		echo "<script>window.open('../adm/manage-staff.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>