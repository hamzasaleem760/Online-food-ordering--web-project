<?php
	session_start();
     $path="http://localhost:8080/HamzaProjects/";
 		function sanitizeInput($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>