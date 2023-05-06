<?php
	require("include/config.php");
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us</title>
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
<div id="contact-cover">

	<h1 class="serv">Contact us</h1>
	   <div class="form-contact">
		 <form action="thankyou.php" method="post" >
         <div><label>Name :</label>
         <input type="text" name="firstname" placeholder="Enter Your Name Here" required></div>
    	<div><label>Email :</label>
       <input type="text" name="lastname" placeholder="Enter Your Email here" required></div>
		<div><label>Your Message :</label>
		<textarea placeholder="Enter you message here" name="mess">
		</textarea></div>
  
    <input id="submit-btn" type="submit" value="Submit">
   <?php
	

   ?>
  </form>

	</div>
</div>
</main>


<?php
	require("include/footer.php");
	?>

</body>
</html>