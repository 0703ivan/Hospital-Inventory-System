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

	$query = mysqli_query($con, "INSERT INTO `supply`(`item_id`,`item_name`,`quantity`,`man_date`,`expire_date`,`supplier`,`country`)VALUES('$item_id','$item_name','$quantity','$manf_date','$expire_date','$supplier','$country')");
	if($query){
		echo "<script>window.open('../adm/manage-supply.php','_SELF')</script>";
	}else{
		echo "failed to connect";
	}
}
?>