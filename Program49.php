<!DOCTYPE html>
<html>
<head>
    <title>PHP Name Display</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Enter your name: </label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = $_POST["name"];
        echo "<br><br>Hello, $userName!";
    }
    ?>
</body>
</html>
