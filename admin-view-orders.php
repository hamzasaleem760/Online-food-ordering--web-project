<?php
	require("include/config.php");
	if(isset($_SESSION["loggedin"])&&($_SESSION["loggedin"])){
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin > View Orders</title>
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
	
	
	<h2> Admin > View Orders  </h2>
	<p>
		View Orders Here:
	</p>
	<ul>
<?php	
$somedirectory = "orders";
$dh = opendir($somedirectory);
while (false !== ($afilename = readdir($dh))) {
if (is_file($somedirectory."/".$afilename))
{
	$rp=$somedirectory."/".$afilename;
	print("<li><a href=\"admin-view-orders-details.php?order=$rp\">");
	print($afilename);
		print("</a></li>\n");
}
}    
closedir($dh);	
?>	
</ul>
</main>
</div>
<aside >
	<?php
	require("admin-menu.php")
	?>
	
</aside>
<div class="clear"></div>


<?php
	require("include/footer.php");
	?>
</body>
</html>
<?php
	}
	else
	{
		header("Location:unauthorizedAccess.php");
		exit;
	}
?>