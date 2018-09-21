<?php
$file = fopen("config.conf");
$text = fread($file, 100);
print($text);
?>
