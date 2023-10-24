<?php
$hello = "./textfile\aextfile.txt";
$fp = fopen($hello, 'r');

;
while($hello = fgets($fp)){
 echo $hello;
}
fclose($fp);
