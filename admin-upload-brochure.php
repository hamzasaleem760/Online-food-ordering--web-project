<?php
	require("include/config.php");
	if(isset($_SESSION["loggedin"])&&($_SESSION["loggedin"])){
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin > Upload Brochure</title>
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
	
	
	<h2> Admin > Upload Brochure </h2>
	<p>
		You can also Upload your Brochure Over here You have a link here:
	</p>
	


<form action="admin-upload-action.php"
method="post" enctype="multipart/form-data">
<label for="uf">File:</label>
<input type="file" id="uf" name="userfile" />
<input type="submit" name="submit" value="Upload" />
</form>


	<?php
	require("admin-menu.php")
	?>

</main>
</div>
<aside >

	
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
		header("Location:unauthorizedaccess.php");
		exit;
	}
?>