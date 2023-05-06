<?php
	require("include/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin </title>
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
<main id="main-content">
	
	
	<h2> Admin  </h2>	
	<?php
	require("admin-menu.php");
	?>
</main>
</div>
<aside>
	
</aside>
	

<div class="clear"></div>


<?php
	require("include/footer.php");
	?>
</body>
</html>