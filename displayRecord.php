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

// Escape special characters in a string
$product_name = mysqli_real_escape_string($conn, $_POST['food_name']);

// Create and execute query
$sql = "SELECT * FROM entry_details2 WHERE name = '$product_name'";
$result = $conn->query($sql);

// Check if records were returned
if ($result->num_rows > 0) {
    // Create a table to display the record
    echo 'Selected record as the following: <br><br>';
    echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
    echo '<tr>
            <td align="center"><b>No</b></td>
            <td align="center"><b>Product Name</b></td>
            <td align="center"><b>Product Price</b></td>
            <td align="center"><b>Update Product</b></td>
          </tr>';
    
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">' . $row["id"] . '</td>';
        echo '<td align="center">' . $row["name"] . '</td>';
        echo '<td align="center">' . $row["price"] . '</td>';
        echo "<td align='center'><a href='updateProcess.php'>UPDATE</a></td>";
        echo '</tr>';
    }

    echo '</table></p>';
} else {
    echo '<font color=red>No record found</font>';
}

// Close connection
$conn->close();
?>