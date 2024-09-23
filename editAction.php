<?php
// Include the database connection file
require_once("dbConnection.php");



if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);	
	$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$birth = mysqli_real_escape_string($mysqli, $_POST['birth']);
	$country = mysqli_real_escape_string($mysqli, $_POST['country']);
	$file = mysqli_real_escape_string($mysqli, $_POST['file']);	
	
	// Check for empty fields
	if (empty($fname) || empty($email) || empty($password)|| empty($lname)|| empty($gender)|| empty($age)|| empty($birth)|| empty($country) || empty($file)) {
		if (empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if (empty($password)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if (empty($lname)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if (empty($gender)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if (empty($age)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if (empty($birth)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if (empty($country)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if (empty($file)) {
			echo "<font color='red'>File  is not uploaded.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE done SET `fname` = '$fname', `email` = '$email', `password` = '$password' , `lname` = '$lname' , `gender` = '$gender' , `age` = '$age' , `birth` = '$birth' , `country` = '$country', `file` = '$file' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='main.php'>View Result</a>";
		
   
   


	}
}
