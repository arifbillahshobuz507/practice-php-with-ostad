<?php
$fp = "./date\date.txt";
$line = fopen($fp, "a"); //a mood can old valu read keep than add new valu

$lineread = fwrite($line, "hii \n"); 
$lineread = fwrite($line, "hii \n"); 
$lineread = fwrite($line, "hii this is nichar\n"); 
$lineread = fwrite($line, "hii this is kakoli farnichar\n"); 
echo $lineread;

fclose($line);



