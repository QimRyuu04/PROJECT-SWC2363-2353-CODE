<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h3 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            text-decoration: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h3>GrabFood Cart</h3>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database123456";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//create and execute query
$sql = "SELECT * FROM entry_details2";
$result = $conn->query($sql);

//check if records were returned
if ($result->num_rows > 0) {

    //create a table to display the record
    echo '<table>';
    echo '<tr><th>id</th><th>Food Name</th><th>Food Price</th></tr>';

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'.$row["id"].'</td>';
        echo '<td>'.$row["name"].'</td>';
        echo '<td>'.$row["price"].'</td>';
        echo '</tr>';
    }
}
else {
    echo '<tr><td colspan="3">0 results</td></tr>'; //if no record found in the database
}

//close connection
$conn->close();
?>

<p><button><a href="PROJECT.php.html">Back to Main Menu</a></button></p>

</body>
</html>
