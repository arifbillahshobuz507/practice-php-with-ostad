<?php

$fp = fopen('./textfile\aextfile.txt', "r");
$line = fgets($fp);
echo $line;
fclose($fp); 
