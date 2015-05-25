<?php
$myfile = fopen("test.txt", "a+");
$songTitle = isset($_POST['songTitle']) ? $_POST['songTitle'] : "";
$album = isset($_POST['album']) ? $_POST['album'] : "";
$rating = isset($_POST['Rating']) ? $_POST['Rating'] : "";
$thoughts = isset($_POST['thoughts']) ? $_POST['thoughts'] : "";

fwrite($myfile, $songTitle);
fwrite($myfile, "\n");
fwrite($myfile, $album);
fwrite($myfile, "\nRating: ");
fwrite($myfile, $rating);
fwrite($myfile, "\n");
fwrite($myfile, $thoughts);
fwrite($myfile, "\n");
fclose($myfile);
header("Location: http://localhost/TestForm/index.php");
?>