<?php
	if(isset($_SESSION["loggedin"])&&($_SESSION["loggedin"])){
?>
		<h3>Admin Menu</h3>
	<ul>
		<li> <a href="admin-view-Orders.php">View Orders</a></li>
		<li> <a href="logoff.php">Logoff</a></li>
		<li> <a href="admin-upload-brochure.php">Upload Brochures</a></li>
		
</ul>

<?php
}
else{
	if(isset($_COOKIE["adminem"])){
		$defaultuser=$_COOKIE["adminem"];
	}else {
		$defaultuser="";
	}
	
?>
<div class="admin" >
	<form action="Login.php" method="post">
		<div><label>Enter User Name:</label>
		<input type="text" name="un" placeholder="Email here:" value="<?php  echo $defaultuser;?>" /></div>
		<div><label>Password:</label>
		<input type="password" name="pw" placeholder="password:"/></div>
		<input type="submit" value="Login"/>
	</form>
</div>
<?php
}
?>
