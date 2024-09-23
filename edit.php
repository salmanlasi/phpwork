<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM done WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$fname = $resultData['fname'];
$email = $resultData['email'];
$password = $resultData['password'];
$lname = $resultData['lname'];
$gender = $resultData['gender'];
$age = $resultData['age'];
$birth = $resultData['birth'];
$country = $resultData['country'];
$file = $resultData['file'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #2a2a2a; */
            background-image: url('https://ideogram.ai/assets/progressive-image/balanced/response/WiiVJjB6Su6XCkAGX0pCoQ');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
			margin-top: 5em;
        }
        
        .form-container {
            /* background-color: rgba(255, 255, 255, 0.37); */
            background-color: rgba(255, 35, 119, 0.523);
            border-radius: 12px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            width: 100%;
            color: white;
        }

        .form-container h2 {
            text-align: center;
            color: #white;
        }

        .form-container label {
            font-size: 16px;
            color: #white;
            margin-bottom: 8px;
            display: block;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container input[type="file"],
        .form-container input[type="date"] {
            width: 100%;
            padding: 12px;
            margin: 1px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #333;
            color: #fff;
        }

        .form-container input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #e55f98;
        }

        .form-container table {
            width: 100%;
        }

        .form-container td {
            padding: 10px;
        }

    </style>
</head>
<body>
    <div class="form-container">
		<h1> Frenzy.com</h1>
        <h2>Update Your Id </h2>
        <form name="edit" method="post" action="editAction.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="fname">First Name</label></td>
                    <td><input type="text" name="fname" value="<?php echo $fname; ?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" value="<?php echo $password; ?>"></td>
                </tr>
                <tr>
                    <td><label for="lname">Last Name</label></td>
                    <td><input type="text" name="lname" value="<?php echo $lname; ?>"></td>
                </tr>
                <tr>
					
                    <td><label for="gender">Gender</label></td>
                    <td><input type="text"  name="gender" value="<?php echo $gender; ?>"></td>
					
	
                </tr>
                <tr>
                    <td><label for="age">Age</label></td>
                    <td><input type="text" name="age" value="<?php echo $age; ?>"></td>
                </tr>
                <tr>
                    <td><label for="birth">Date of Birth</label></td>
                    <td><input type="date" name="birth" value="<?php echo $birth; ?>"></td>
                </tr>
                <tr>
                    <td><label for="country">Country</label></td>
                    <td><input type="text" name="country" value="<?php echo $country; ?>"></td>
                </tr>
                <tr>
                    <td><label for="file">Image</label></td>
                    <td><input type="file" name="file" value="<?php echo $file; ?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
