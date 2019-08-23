<?php
$name= $_GET['name'];
$place= $_GET['place'];
$myfile = fopen("data.txt", "a") or die("Unable to open file!");
$txt = "name is $name\n";
fwrite($myfile, $txt);
$txt = "place is $place\n\n";
fwrite($myfile, $txt);
fclose($myfile);
header("Location: index.html");
?>
