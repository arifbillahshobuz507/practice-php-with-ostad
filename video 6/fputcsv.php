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

$file = getcwd().'\video 6\data\data.txt';
// $fp = fopen($file, "w");
// foreach($studens as $item){
//  fputcsv($fp, $item);
// }
// fclose($fp);



$student = [
 "name"=> "kobita",
  "gamil"=> "kobita@gmail.com",
  "phone"=> 654984984,
];
$fp = fopen($file, "a+");
fputcsv($fp, $student);
fclose($fp);

