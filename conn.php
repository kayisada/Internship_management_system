<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database="student_internship"
	$conn = new mysqli($servername, $username, $password,$database);
	
	if(!$conn){
		die("")
	}


	$db = mysqli_select_db($conn,'student_internship');


?>