<?php
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

$file= getcwd().trim(' \video 8\data\data.txt' );
// $data = json_encode($studens);
// echo $data;
// file_put_contents($file,$data);

$data = file_get_contents($file);
$mData = json_decode($data, true);
print_r($mData);