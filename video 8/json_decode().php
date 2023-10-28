<?php
$file= getcwd().trim(' \video 8\data\data.txt' );
$data = file_get_contents($file);
$mData = json_decode($data, true);// json_decode outpur object data // any (object data to array data) chnage writ (true)
print_r($mData);