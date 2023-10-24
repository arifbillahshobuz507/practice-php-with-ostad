<?php

$fp = fopen('./textfile/textfile.txt', "r");

$line = fgets($fp);
echo $line;

fclose($fp); 
