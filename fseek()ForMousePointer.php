<?php
$file = "./textfile\aextfile.txt";
$fp = fopen($file, 'r');

while ($file = fgets($fp)) 
 {
  echo $file;
 };
fseek($fp,10); // rewind change mouse curser ponter being/starting point
while ($file = fgets($fp)) 
 {
  echo $file;
 };
fseek($fp,-1, SEEK_END); // rewind change mouse curser ponter being/starting point
while ($file = fgets($fp)) 
 {
  echo $file;
 };

fclose($fp);
