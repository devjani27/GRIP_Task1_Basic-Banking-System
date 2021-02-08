<?php 
	session_start();
	DEFINE('DB_USER','root');
    DEFINE('DB_PASSWORD','');
    DEFINE('DB_SERVER','localhost');
    DEFINE('DB_NAME','bank_application');
    $con=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME)
    OR dies('Could not connect to MySQL:' .
    mysqli_connect_error());

	if(isset($_POST['submit'])){
		$a = $_POST['user'];
		$b = $_POST['Amount'];
		$d = $_GET['Name'];
	}
	
	$result1 = mysqli_query($con,"SELECT * FROM customer where Name='$a'");
	if (!$result1) {
		printf("Error: %s\n", mysqli_error($con));
		exit();
	}
	while($row = mysqli_fetch_array($result1)){
		$f = $row[3];
		$c = "UPDATE customer SET ";
		$c .= "AccountBalance=AccountBalance+'$b' WHERE Name='$a'";
		mysqli_query($con,$c);
	}
	
	$result2 = mysqli_query($con,"SELECT * FROM customer where Name='$d'");
	if (!$result2) {
		printf("Error: %s\n", mysqli_error($con));
		exit();
	}
	while($row = mysqli_fetch_array($result2)){
		$g = $row[3];
		$e = "UPDATE customer SET ";
		$e .= "AccountBalance=AccountBalance-'$b' WHERE Name='$d'";
		mysqli_query($con,$e);
	}
	
	$result3 = mysqli_query($con,"SELECT * FROM customer where Name='$d'");
	if (!$result3) {
		printf("Error: %s\n", mysqli_error($con));
		exit();
	}
	while($row = mysqli_fetch_array($result3)){
		$h = "INSERT INTO transactions(Sender, Receiver, Amount) VALUES('".$d."', '".$a."', '".$b."')";
		mysqli_query($con,$h);
	}
	
?>

<html>
<head>
<script>
alert("Your Transaction has been Successful");
window.location.href="view_customer.php";
</script>
</head>
<html>