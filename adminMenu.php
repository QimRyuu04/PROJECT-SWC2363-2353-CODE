<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu for Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        p {
            text-align: center;
            margin: 10px 0;
        }

        form {
            text-align: center;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<br><br><br><br><br><br><br><br><br><br><br><br>
<p>Main Menu for Admin</p>

<form action="viewcart.php" method="post">
    <p><input type="submit" value="View Cart" name="cmdView"></p>
</form>

<form action="searchRecord.php" method="post">
    <p><input type="submit" value="Search Cart" name="cmdSearch"></p>
</form>

<form action="deleteList.php" method="post">
    <p><input type="submit" value="Delete Cart" name="cmdDelete"></p>
</form>

<form action="logout.php" method="post">
    <p><input type="submit" value="Log Out" name="cmdlogout"></p>
</form>

</body>
</html>
