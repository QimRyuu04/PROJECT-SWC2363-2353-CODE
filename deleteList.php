<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Multimedia Competition 2020</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        form {
            text-align: center;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 60%;
            border-radius: 8px;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 60%;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            text-decoration: none;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form action="deleteRecord.php" method="post">
    <p>Enter Full Food Name: <input type="text" name="food_name" id="food_name" size="30"></p>
    <p><input type="submit" name="submit"></p>
</form>

</body>
</html>
