<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "register"; 

$conn = mysqli_connect($server_name, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['uname'];
    $passwrod = $_POST['psw'];

    $sql_query = "INSERT INTO register_web (first_name, last_name, phone, email, username, password)
        VALUES ('$first_name', '$last_name', '$phone', '$email', '$username', '$password')";

    if (mysqli_query($conn, $sql_query)) {
        echo "Registered successfully!";
    } else {
        echo "Error: " . $sql_query . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Go Back</title>
</head>
<body>

<form action="register.html" method="post">
    <p style="text-align: center;"><input type="submit" name="goback" value="Go Back"></p>
</form>

</body>
</html>
