<!DOCTYPE html>
<html>
<head>
    <title>Add Two Numbers</title>
</head>
<body>
    <h2>Add Two Numbers</h2>
    <form method="POST" action="">
        <label for="num1">Enter the first number: </label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Enter the second number: </label>
        <input type="number" id="num2" name="num2" required><br><br>

        <input type="submit" value="Add">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum";
    }
    ?>
</body>
</html>
