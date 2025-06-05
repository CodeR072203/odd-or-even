<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            min-width: 300px;
        }

        input, button {
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="box">
        <h2>Odd or Even Number Checker</h2>

        <form method="post">
            <label for="number">Enter a number:</label><br>
            <input type="number" name="number" value="0" required><br>
            <button type="submit">Check</button>
        </form>

        <?php
        $num = 22; //my bday

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["number"];
        }

        if ($num % 2 == 0) {
            echo "<h2>$num is an Even number.</h2>";
        } else {
            echo "<h2>$num is an Odd number.</h2>";
        }
        ?>
    </div>

</body>
</html>
