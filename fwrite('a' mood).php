<?php
$fp = "./date\date.txt";
$line = fopen($fp, "a"); //a mood can old valu read keep than add new valu

$lineread = fwrite($line, "hii this is kakoli farnichar\n"); 
$lineread = fwrite($line, "hii this is kakoli farnichar\n"); 
$lineread = fwrite($line, "hii this is kakoli farnichar\n"); 
$lineread = fwrite($line, "hii this is kakoli farnichar\n"); 
echo $lineread;

fclose($line);



