<?php
	require("include/config.php");
$fn=sanitizeInput($_POST["fn"]);
$em=sanitizeInput($_POST["em"]);
$Age=sanitizeInput($_POST["Age"]);
$number=sanitizeInput($_POST["number"]);
$service=sanitizeInput($_POST["service"]);
$Package=sanitizeInput($_POST["Package"]);
$message=sanitizeInput($_POST["message"]);




$filename= $em . date("Y-m-d-H-i-s");

$message = "<div><strong>Full Name:</strong>" .$fn."</div>";
$message .= "<div><strong>Email:</strong>". $em."</div>";
$message .= "<div><strong>Age:</strong>" . $Age ."</div>";
$message .= "<div><strong>Number:</strong>" . $number ."</div>";
$message .= "<div><strong>Service:</strong>" . $service ."</div>";
$message .= "<div><strong>Package:</strong>" . $Package ."</div>";
$message .= "<div><strong>Message:</strong>" . $message ."</div>";
		 $file = fopen("orders/".$filename.".txt", "w") or die("Unable to open file!");
		fwrite($file, $message);
		fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order Confirmation</title>
	<?php
	require("include/config-meta-css-js.php");
	?>
</head>
<body>
<?php
	require("include/header.php");
	require("include/nav.php");
?>

<div class="layout">
<main>
	
	
	<h2> Order confirmation</h2>
	<p>
		Your Order Has been Confirmed. You will be contacted shortly.
	</p>	
	
	<?php echo $message;
	?>
</main>
</div>

<?php
	require("include/footer.php");
	?>
</body>
</html>