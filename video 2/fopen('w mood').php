<?php
$fp = "./date\date.txt";
$line = fopen($fp, "w");//w mood can't keep old valu.. old valu drop and only add new valu 

$lineread = fwrite($line, "hii this is kakoli farnichar\n"); 
$lineread = fwrite($line, "hii this is kakoli farnichar\n"); 
$lineread = fwrite($line, "hii this is kakoli farnichar\n"); 
$lineread = fwrite($line, "hii this is kakoli farnichar\n"); 
echo $lineread;

fclose($line);



