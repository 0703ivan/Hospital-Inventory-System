<?php
require('../connect.php');
if(isset($_POST['delete'])){
	$item_id=$_POST['item_id'];
	
	$delete=mysqli_query($con, "DELETE FROM `supply` WHERE `item_id`='$item_id'");
	if($delete){
		echo "<script>window.open('../adm/manage-supply.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>