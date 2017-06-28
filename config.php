<?php
require("connect.php");

if(isset($_POST['submit'])){

	$username = mysqli_real_escape_string($con, $_POST['username']);

	$password = mysqli_real_escape_string($con, $_POST['password']);

	$query = mysqli_query($con, "SELECT * FROM login WHERE user_name='$username' AND password='$password'") or die("Cannot connect to the databse");	
		
	$row = mysqli_fetch_array($query);

	$previlage = $row['previlage'];

	if($row['previlage']=='admin'){
		session_start();
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['fname']=$row['fname'];
		$_SESSION['date'] = date('Y-m-d H:i:s');
		$user_name = $_SESSION['user_name'];
		$date = $_SESSION['date'];
		$staff_id=$row['staff_id'];
		echo "<script>window.open('adm.php','_SELF')</script>";
		mysqli_query($con, "INSERT INTO user_log(`user_name`,`login_date`,`staff_id`) values ('$user_name', '$date','$staff_id')");
		
	}
	else if($row['previlage']=='accountant'){
		session_start();
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['fname']=$row['fname'];
		$_SESSION['date'] = date('Y-m-d H:i:s');
		$user_name = $_SESSION['user_name'];
		$date = $_SESSION['date'];
		$staff_id=$row['staff_id'];
		echo "<script>window.open('account.php','_SELF')</script>";
		mysqli_query($con, "INSERT INTO user_log(`user_name`,`login_date`,`staff_id`) values ('$user_name', '$date','$staff_id')");
		
	}
	else if($row['previlage']=='doctor'){
		session_start();
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['fname']=$row['fname'];
		$_SESSION['date'] = date('Y-m-d H:i:s');
		$user_name = $_SESSION['user_name'];
		$date = $_SESSION['date'];
		$staff_id=$row['staff_id'];
		echo "<script>window.open('doctor.php','_SELF')</script>";
		mysqli_query($con, "INSERT INTO user_log(`user_name`,`login_date`,`staff_id`) values ('$user_name', '$date','$staff_id')");
		
	}
	else if($row['previlage']=='admin'){
		session_start();
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['fname']=$row['fname'];
		$_SESSION['date'] = date('Y-m-d H:i:s');
		$user_name = $_SESSION['user_name'];
		$date = $_SESSION['date'];
		$staff_id=$row['staff_id'];
		echo "<script>window.open('lab.php','_SELF')</script>";
		mysqli_query($con, "INSERT INTO user_log(`user_name`,`login_date`,`staff_id`) values ('$user_name', '$date','$staff_id')");
		
	}
	else if($row['previlage']=='nurse'){
		session_start();
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['fname']=$row['fname'];
		$_SESSION['date'] = date('Y-m-d H:i:s');
		$user_name = $_SESSION['user_name'];
		$date = $_SESSION['date'];
		$staff_id=$row['staff_id'];
		echo "<script>window.open('nurse.php','_SELF')</script>";
		mysqli_query($con, "INSERT INTO user_log(`user_name`,`login_date`,`staff_id`) values ('$user_name', '$date','$staff_id')");
		
	}
	else if($row['previlage']=='phamacist'){
		session_start();
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['fname']=$row['fname'];
		$_SESSION['date'] = date('Y-m-d H:i:s');
		$user_name = $_SESSION['user_name'];
		$date = $_SESSION['date'];
		$staff_id=$row['staff_id'];
		echo "<script>window.open('phamac.php','_SELF')</script>";
		mysqli_query($con, "INSERT INTO user_log(`user_name`,`login_date`,`staff_id`) values ('$user_name', '$date','$staff_id')");
		
	}
	else if($row['previlage']=='recieptionist'){
		session_start();
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['fname']=$row['fname'];
		$_SESSION['date'] = date('Y-m-d H:i:s');
		$user_name = $_SESSION['user_name'];
		$date = $_SESSION['date'];
		$staff_id=$row['staff_id'];
		echo "<script>window.open('reciept.php','_SELF')</script>";
		mysqli_query($con, "INSERT INTO user_log(`user_name`,`login_date`,`staff_id`) values ('$user_name', '$date','$staff_id')");
		
	}
	else if($row['previlage']=='labaratorist'){
		session_start();
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['fname']=$row['fname'];
		$_SESSION['date'] = date('Y-m-d H:i:s');
		$user_name = $_SESSION['user_name'];
		$date = $_SESSION['date'];
		$staff_id=$row['staff_id'];
		echo "<script>window.open('lab.php','_SELF')</script>";
		mysqli_query($con, "INSERT INTO user_log(`user_name`,`login_date`,`staff_id`) values ('$user_name', '$date','$staff_id')");
		
	}
	else

		die(header("location:index.html?error=1"));
 		// echo "<script type='text/javascript'>alert('$message');</script>";
 		// echo "<script>window.open('index.html','_SELF')</script>";
}
?>