<!DOCTYPE html>
<html>
<head>
    <title>Calculate Rectangle Area</title>
</head>
<body>
    <h2>Calculate Rectangle Area</h2>
    <form method="POST" action="">
        <label for="length">Enter the length of the rectangle: </label>
        <input type="number" id="length" name="length" required><br><br>

        <label for="width">Enter the width of the rectangle: </label>
        <input type="number" id="width" name="width" required><br><br>

        <input type="submit" value="Calculate Area">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $width = $_POST["width"];

        $area = $length * $width;

        echo "The area of the rectangle with length $length and width $width is: $area square units";
    }
    ?>
</body>
</html>
