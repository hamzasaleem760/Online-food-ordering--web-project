<?php
	require("include/config.php");
	if(isset($_SESSION["loggedin"])&&($_SESSION["loggedin"])){

	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin > View Orders > details</title>
	<?php
	require("include/config-meta-css-js.php");
	?>
</head>
<body>
<?php
	require("include/header.php");
	require("include/nav.php");
?>


<main>
	
	<div class="layout">
	<h2> Admin > View Orders > details </h2>
	<?php
	if (isset($_GET["order"])) {
		# code...
		$file=$_GET["order"];
		include($file);
	}
	else
	{
		print("You Are NOT ALLOWED TO SEE THE FILES");
	}
		
	?>	
	</div>
	}
</main>


<?php
	require("include/footer.php");
	?>
</body>
</html>
<?php
	}
	else
	{
		header("Location:UnauthorizedAccess.php");
		exit;
	}
?>