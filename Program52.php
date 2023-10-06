<?php
$fileName = "newfile.txt";

$file = fopen($fileName, "w");
if ($file) {
    $content = "This is the content of the new file.\n";
    fwrite($file, $content);

    fclose($file);

    echo "File '$fileName' has been created and written successfully.";
} else {
    echo "Failed to create the file.";
}
?>
