

<?php
if ($_FILES["userfile"]["error"] > 0)
{
	echo "Return Code: " . $_FILES["userfile"]["error"] . "<br />";
	 header("Location:unauthorizedaccess.php");
	 exit;
}
else
{


	move_uploaded_file($_FILES["userfile"]["tmp_name"],"Services/Broucher.pdf") ;
	header("Location:services/service-01.php");
	exit;
	
}

?>
