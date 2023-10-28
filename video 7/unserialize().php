<?php

$file = getcwd(). trim('\data\data.txt');
// echo $file;

$data = file_get_contents($file);
$result = unserialize($data);
print_r($result);