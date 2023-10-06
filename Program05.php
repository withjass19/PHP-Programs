<!DOCTYPE html>
<html>
<head>
    <title>Days to Years Converter</title>
</head>
<body>
    <h2>Days to Years Converter</h2>
    <form method="POST" action="">
        <label for="days">Enter the number of days:</label>
        <input type="number" id="days" name="days" required><br><br>

        <input type="submit" value="Convert to Years">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $days = $_POST["days"];
        $years = floor($days / 365);
        $remainingDays = $days % 365;

        echo "$days days is approximately $years years and $remainingDays days.";
    }
    ?>
</body>
</html>
