<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        p {
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Delete Record</h2>

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

    // Get input value
    $product_name = $_POST['food_name'];

    // SQL to delete a record
    $sql = "DELETE FROM entry_details2 WHERE name='$product_name'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p>Record deleted successfully</p>";
    } else {
        echo "<p>Error deleting record: " . $conn->error . "</p>";
    }

    // Close connection
    $conn->close();
    ?>

    <p><a href="adminMenu.php">Back to Main Menu</a></p>
</div>

</body>
</html>