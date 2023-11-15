<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "database123456";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize $product_id with a default value (e.g., 0) when the page is first loaded
$product_id = isset($_POST['id']) ? $_POST['id'] : 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    $product_details = $_POST['description'];

    // Update the record in the database
    $sql = "UPDATE entry_details2 SET price = '$product_price', description = '$product_details' WHERE id = '$product_id'";

    if ($conn->query($sql) === TRUE) {
        echo '<div style="text-align: center; padding: 10px; background-color: #4CAF50; color: white;">Record updated successfully!</div>';
    } else {
        echo '<div style="text-align: center; padding: 10px; background-color: #f44336; color: white;">Error updating record: ' . $conn->error . '</div>';
    }
}

// Fetch the existing values for the selected record
$sql_select = "SELECT * FROM entry_details2 WHERE id = '$product_id'";
$result_select = $conn->query($sql_select);

$existing_name = "";
$existing_price = "";
$existing_description = "";

if ($result_select->num_rows > 0) {
    while ($row = $result_select->fetch_assoc()) {
        // Populate form fields with existing values
        $existing_name = $row['name'];
        $existing_price = $row['price'];
        $existing_description = $row['description'];
    }
} else {
    echo '';
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<br><br><br><br><br>
    <form method="post" action="">
        <h2 style="text-align: center;">Update Record</h2>

        <p><label for="id">Product ID:</label><input type="text" name="id" value="<?php echo $product_id; ?>"></p>

        <p><label for="name">Product Name:</label><input type="text" name="name" value="<?php echo $existing_name; ?>"></p>

        <p><label for="price">Product Price:</label><input type="text" name="price" value="<?php echo $existing_price; ?>"></p>

        <p><label for="description">Product Description:</label><textarea name="description"><?php echo $existing_description; ?></textarea></p>

        <p style="text-align: center;"><input type="submit" value="Update Record"></p>
    </form>

</body>
</html>