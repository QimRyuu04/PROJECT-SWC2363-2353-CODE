<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Section</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h3 {
            text-align: center;
            color: #4CAF50;
        }

        form {
            text-align: center;
            margin: 20px auto;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 60%;
            box-sizing: border-box;
        }

        input[type="submit"], button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            text-decoration: none;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h3>Search Section</h3>

<form action="displayRecord.php" method="post">
    <p>Food Name: <input name="food_name" id="food_name" type="text" size="30"></p>
    <p><input type="submit" name="Submit" value="Search"></p>
</form>

<p style="text-align: center;"><button><a href="adminMenu.php">Back to Main Menu</a></button></p>

</body>
</html>