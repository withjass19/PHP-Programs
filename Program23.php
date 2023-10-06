<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cube Root</title>
</head>
<body>
<form method="post">
Enter the number  <input type="text" name="Number" /><br />
<input type="submit" name="submit" />
</form>
<?php
if(isset($_POST['submit']))
{
$num=$_POST['Number'];
$cube_root=(pow($num,(1.0/3.0)));
echo "$cube_root";
}
?>
</body>
</html>