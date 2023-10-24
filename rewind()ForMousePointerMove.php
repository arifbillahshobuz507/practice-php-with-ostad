<?php
$file = "./textfile\aextfile.txt";
$fp = fopen($file, 'r');

while ($file = fgets($fp)) 
 {
  echo $file;
 };
rewind($fp); // rewind change mouse curser ponter being/starting point
while ($file = fgets($fp)) 
 {
  echo $file;
 };
rewind($fp); // rewind change mouse curser ponter being/starting point
while ($file = fgets($fp)) 
 {
  echo $file;
 };

fclose($fp);
