<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest Calculator</title>
</head>
<body>
    <h2>Simple Interest Calculator</h2>
    <form method="POST" action="">
        <label for="principal">Principal Amount:</label>
        <input type="number" id="principal" name="principal" required><br><br>

        <label for="rate">Rate of Interest:</label>
        <input type="number" id="rate" name="rate" required><br><br>

        <label for="time">Time (in years):</label>
        <input type="number" id="time" name="time" required><br><br>

        <input type="submit" value="Calculate Simple Interest">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $principal = $_POST["principal"];
        $rate = $_POST["rate"];
        $time = $_POST["time"];
        
        $simpleInterest = ($principal * $rate * $time) / 100;

        echo "Principal Amount: $principal<br>";
        echo "Rate of Interest: $rate% per annum<br>";
        echo "Time (in years): $time<br>";
        echo "Simple Interest: $simpleInterest";
    }
    ?>
</body>
</html>
