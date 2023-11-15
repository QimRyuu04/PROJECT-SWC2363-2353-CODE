<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "database123456";

$conn = mysqli_connect($server_name, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['c1'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];

    $sql_query = "INSERT INTO entry_details2 (name, price, description)
        VALUES ('$product_name', '$product_price', '$product_description')";

    if (mysqli_query($conn, $sql_query)) {
        echo "";
    } else {
        echo "Error: " . $sql_query . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Grabfood</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .confirmation-message {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            width: 60%;
        }

        a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            font-size: 16px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="confirmation-message">
        <p>Food added to cart successfully!</p>
    </div>

    <a href="PROJECT.php.html">Go Back</a>
</body>
</html>
