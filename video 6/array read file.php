<?php
$fileCurrentPath = getcwd().trim(' \video 6\data\data.txt' );
$fp = fopen($fileCurrentPath, "r");
while($line = fgets($fp))
{
 $explode = explode(",", $line);
 // print_r( $explode);
 $maintentLine = sprintf("Name : %s, Gmail : %s, Age : %s", $explode[0],$explode[1],$explode[2]);
 echo $maintentLine;

};
fclose($fp);