<?php
$myfile = fopen("webdictionary.txt", "r")
 or
  die("Error: Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt"));
fclose($myfile);
?>