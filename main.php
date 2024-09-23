<?php
// Include the database connection file
require_once("dbConnection.php");
include('config/header.php');

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM done ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>

	<style>
		.add-button {
    display: inline-block;
    padding: 10px 20px;
    font-family: 'Arial', sans-serif;
    font-size: 16px;
	position: relative;
	left: 80%;
    font-weight: bold;
    color: white;
	background-color: rgb(247, 29, 243); /* Green */
    text-decoration: none;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.add-button:hover {
	background-color: rgba(255, 35, 251, 0.644);/* Darker green on hover */
    box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
}


/* style table */
.styled-table {
    width: 80%;
    margin: 20px auto;
	/* position: relative;
	top: 8em; */
    border-collapse: collapse;
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.styled-table th, .styled-table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.styled-table th {
    background-color: #ff1493; /* Dark pink */
    color: white;
    text-transform: uppercase;
    font-size: 14px;
}

.styled-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.styled-table tr:hover {
    background-color: #f0c1d6; /* Light pink on hover */
}

.styled-table img {
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.styled-table img:hover {
    transform: scale(1.05); /* Slight zoom on hover */
}

.action-buttons a {
    text-decoration: none;
    color: white;
    padding: 6px 12px;
    margin: 0 5px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.btn-edit {
    background-color: #ff69b4; /* Lighter pink */
}

.btn-edit:hover {
    background-color: #ff1493; /* Darker pink on hover */
}

.btn-delete {
    background-color: #ff4444; /* Red */
}

.btn-delete:hover {
    background-color: #cc0000; /* Darker red on hover */
}

	</style>
</head>

<body>
	
	

	<table width='80%' style="margin: 10px auto;" class="styled-table">
    <tr>
        <td><strong>Fname</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Password</strong></td>
        <td><strong>Lname</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Age</strong></td>
        <td><strong>Birth</strong></td>
        <td><strong>Country</strong></td>
        <td><strong>Image</strong></td>
        <td><strong>Action</strong></td>
    </tr>
    <?php
    // Fetch the next row of a result set as an associative array
    while ($res = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$res['fname']."</td>";
        echo "<td>".$res['email']."</td>";    
        echo "<td>".$res['password']."</td>";
        echo "<td>".$res['lname']."</td>";
        echo "<td>".$res['gender']."</td>";
        echo "<td>".$res['age']."</td>";
        echo "<td>".$res['birth']."</td>";
        echo "<td>".$res['country']."</td>";
        
        // Display the image
        echo "<td><img src='./upload/".$res['file']."' width='100' height='100'></td>";

        echo "<td class='action-buttons'>
                <a href=\"edit.php?id=$res[id]\" class='btn-edit'>Edit</a> 
                <a href=\"delete.php?id=$res[id]\" class='btn-delete' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
              </td>";
    }
    ?>
</table>

<p>
	<a href="add.php" class="add-button">Add New Data</a>
	</p>

</body>
</html>
