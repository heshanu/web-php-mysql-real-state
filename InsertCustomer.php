<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Name=$_POST['txtName'];
$Address=$_POST['txtAddress'];
$City=$_POST['cmbCity'];
$Mobile=$_POST['txtMobile'];
$Email=$_POST['txtEmail'];
$Gender=$_POST['cmbGender'];
$Birthdate=$_POST['txtBirthDate'];
$UserName=$_POST['txtUserName2'];
$Password=$_POST['txtPassword2'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","root");
	// Select Database
	mysqli_select_db($con,"property");
	// Specify the query to Insert Record
	$sql = "insert into customer_reg (CustomerName,Address,City,Mobile,Email,Gender,BirthDate,UserName,Password) 	values('".$Name."','".$Address."','".$City."','".$Mobile."','".$Email."','".$Gender."','".$Birthdate."','".$UserName."','".$Password."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Thanks For Registration");window.location=\'index.php\';</script>';
?>
</body>
</html>
