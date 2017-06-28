<?php
require('../connect.php');
if(isset($_POST['item'])){
	$item_id=$_POST['item_id'];
	$item_name=$_POST['item_name'];
	$quantity=$_POST['quantity'];
	$manf_date=$_POST['manf_date'];
	$expire_date=$_POST['expire_date'];
	$supplier=$_POST['supplier'];
	$country=$_POST['country'];

	$query = mysqli_query($con, "UPDATE `supply` SET `item_name`='$item_name',`quantity`='$quantity',`man_date`='$manf_date',`expire_date`='$expire_date',`supplier`='supplier',`country`='$country' WHERE `item_id`='$item_id'");
	if($query){
		echo "<script>window.open('../adm/manage-supply.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>