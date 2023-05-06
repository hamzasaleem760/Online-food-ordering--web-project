<?php
	require("include/config.php");
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order Form</title>
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
	
	
	<h2>Order Form</h2>
	
</main>
</div>
<div id="form-div">
<form  action="Order-action.php"  method="post" class="main-forms">
		<div>
	    	<label> <b>Your name :</b></label>
			<input type="text" name="fn" placeholder="Your name" required/>
		</div>
		<div>
			<label><b> Your Email:</b></label>
			<input type="Email" name="em" placeholder="Email Address" required/>
		</div>			
		<div>
				<label > <b>Your Age:</b></label>
			 <input type="number" name="Age" min="10" max="50">
	    </div>
	    <div>
			 <label ><b>Your Phone Number:</b></label>
			 <input type="text" name="number" placeholder="Enter You number here:">
	    </div>

	    <div>
			<label for="service"><b> Select Service</b></label>
			<div><input type="radio" name="service" id="service" value="Desktop Application"/>Desktop Application</div>
			<div><input type="radio"   value="Web Application"/>Web Application</div>
			<div><input type="radio"   value="E-commerce Website"/>E-commerce Website</div>
		</div>
		<div>
			<label> Select Package</label>
			<select name="Package">
				<option value="SM">Small Project</option>
				<option value="NM">Normal project</option>
				<option value="EM">Enterprise level project</option>
			</select>
		</div>
		<div>
			<label>Message</label>
			<textarea name="message" placeholder="Enter Your message"></textarea>
		</div>
		<b>Place Order</b>
		<div>
			<input type="submit" value="Order">
		</div>

	</form>
</div>

<?php
	require("include/footer.php");
	?>
</body>
</html>