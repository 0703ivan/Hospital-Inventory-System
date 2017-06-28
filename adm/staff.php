<?php require('../session1.php');?>
<?php
session_start();
require("../config.php");
if(!isset($_SESSION['user_name'])){
  echo "<script>window.open('../index.html','_SELF')</script>";
  exit();
}
else{
  $user=$_SESSION['user_name'];
  $fname=$_SESSION['fname'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/icon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KYAMBOGO MEDICAL CENTER</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/layout.css"></link>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">KYU</a>
          </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
              <input class="form-control" placeholder="Search" type="text">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
          </form>
        <ul class="nav navbar-nav">
        <li><a href="../adm.php">Home <span class="sr-only"></span></a></li>
        <li><a href="#">Notification </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="users.php">System Users</a></li>
            <li><a href="manage-users.php">Manage Users</a></li>
            <li class="divider"></li>
            <li><a href="#">System Logs</a></li>
            <li><a href="#">User Logs</a></li>            
            <li class="divider"></li>
            </ul>
        </li>
        <li><a href="#">Notice Board </a></li>
      </ul>
      </ul>
    </div>
  </div>
</nav>

<div class="body-section">
      <div class="aside-left">
        <img src="../images/kyu.png" class="img-circle profile-img" href="#"><br>
        <ul class="list-group">
          <li class="list-group-item"><a href="#"><?php echo $fname;?></a></li>
          <li class="list-group-item"><a href="#">Add a Photo</a></li>
        </ul>
        <ul class="list-group hover">
          <li class="list-group-item"><a href="staff.php">STAFF</a></li>
          <li class="list-group-item"><a href="manage-staff.php">MANAGE STAFF</a></li>
          <li class="list-group-item"><a href="patients.php">PATIENTS</a></li>
          <li class="list-group-item"><a href="manage-patients.php">MANAGE PATIENTS</a></li>
          <li class="list-group-item"><a href="supply.php">SUPPLY</a></li>
          <li class="list-group-item"><a href="manage-supply.php">MANAGE SUPPLY</a></li>
      </ul>
      <form class="buttons" action="../logout.php" method="POST">
        <input type="submit" class="btn btn-success btn-sm" name="contact" value="Contact">
        <input type="submit" class="btn btn-success btn-sm" name="logout" value="Logout">
      </form>
      </div>
      <div class="aside-right">
        <h1>Staff</h1>
        
        <table class="table table-striped table-hover "align="center" cellpadding="10" border="1" cellspacing="0" width="900px">
          <thead>
            <th class="info">STAFF ID</th>
            <th class="success">FIRST NAME</th>
            <th class="info">LAST NAME</th>
            <th class="success">CONTACT</th>
            <th class="info">EMAIL</th>
            <th class="success">ADDRESS</th>
            <th class="info">DEPARTMENT</th>
          </thead>
          <?php 
            require('../connect.php');
            $sql=mysqli_query($con,"SELECT * FROM `staff`") or die("failed to connect");
            while ($row=mysqli_fetch_array($sql)) {
              echo 
                "<tr>
                <td>".$row['staff_id']."</td>
                <td>".$row['fname']."</td>
                <td>".$row['lname']."</td>
                <td>".$row['contact']."</td>
                <td>".$row['email']."</td>
                <td>".$row['address']."</td>
                <td>".$row['department']."</td>
                </tr>";
            }
          ?>
        </table>

      </div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>