<?php
$fileName = "example.txt";
$contentToWrite = "This is the content that we are writing to the file.\n";
$file = fopen($fileName, "w");

if ($file) {
    fwrite($file, $contentToWrite);
    fclose($file);
    echo "Content has been written to the file successfully.<br>";
} else {
    echo "Failed to write content to the file.<br>";
}
$file = fopen($fileName, "r");

if ($file) {
    $contentRead = fread($file, filesize($fileName));
    fclose($file);
    echo "Content read from the file:<br>";
    echo $contentRead;
} else {
    echo "Failed to read content from the file.";
}
?>
