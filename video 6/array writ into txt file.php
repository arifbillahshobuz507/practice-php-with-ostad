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

$fileCurrentPath = getcwd().trim(' \video 6\data\data.txt' );
// echo $fileCurrentPath;
$fp = fopen($fileCurrentPath, "w+");
 foreach($studens as $studen){
  // print_r( $studen);
  $line = sprintf("%s,%s,%s\n", $studen["name"],$studen["gamil"],$studen["phone"]);
  // echo $line;
  fwrite($fp, $line);
 }
fclose($fp);