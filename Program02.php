<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">   
        Width: <input type="number" name="width"><br><br>   
        Length: <input type="number" name="length"> <br>   
        <input type = "submit" name = "submit" value="Calculate">   
    </form>   
    <?php   
    if(isset($_POST['submit']))  
        {   
    $width = $_POST['width'];   
    $length = $_POST['length'];   
    $area = $width*$length;   
    echo "<br><br>". "The area of a rectangle with $width x $length is $area";   
    } 
    ?>
</body>
</html>