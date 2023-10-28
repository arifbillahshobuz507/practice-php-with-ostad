<?php
$file= getcwd().trim(' \video 8\data\data.txt' );
$studens = 
[
 [
  "name"=> "arif",
  "gamil"=> "arifbillahshobuz@gmail.com",
  "phone"=> '01956020255'
 ],
 [
  "name"=> "sayd",
  "gamil"=> "sayd@gmail.com",
  "phone"=> '01956020255',
 ],
 [
  "name"=> "rabbani",
  "gamil"=> "rabbani@gmail.com",
  "phone"=> 956020255,
 ],
 [
  "name"=> "warash",
  "gamil"=> "warash@gmail.com",
  "phone"=> 95553255,
 ],
 [
  "name"=> "ashik",
  "gamil"=> "ashik@gmail.com",
  "phone"=> 56549020255,
  ]
 ];
 
 
 
 // json old data remove and new data add 
 $data = json_encode($studens);// json remove old data than add jeson_data new add
 file_put_contents($file,$data);
 
 
 
 // json old data keep and new data add
  $fp = fopen($file, 'a+');
  $newData = json_encode($studens);
  fwrite($fp,$newData);
  fclose($fp);