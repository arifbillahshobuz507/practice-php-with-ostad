<?php

$fileCurrentPath = getcwd().trim(' \video 6\data\data.txt' );
$data = file($fileCurrentPath);
unset($data[0]);
$modifyeddata = array_values($data);
print_r($modifyeddata);
file_put_contents($fileCurrentPath,$modifyeddata);




