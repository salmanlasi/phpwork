<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
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
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO donee (`fname`, `email` ,  `lname` , `gender` , `age` ,  `birth`  `country` ,`file`) VALUES ('$name',  '$email' , '$password', '$lname', '$gender', '$age', '$birth', '$country' ,'$file')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
