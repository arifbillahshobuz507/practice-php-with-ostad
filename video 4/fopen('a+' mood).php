<?php

// fopen(a+) old data keep and // coursur point awalyse down// and add data 

$file = getcwd().trim('\video 4\data.txt');
// echo $file;


// string add 
$fp = fopen($file, "a+");
fwrite($fp, "hii babby\n");
fclose($fp);



// array add 

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
$fp= fopen($file, "a+");
foreach($studens as $data){
  
 $data=sprintf("%s,%s,%s\n",$data["name"], $data["gamil"],$data["phone"]);
 // print_r($data);
 fwrite($fp,$data);
}