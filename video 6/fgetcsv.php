<?php
$file = getcwd(). '\video 6\data\data.txt';
$fp= fopen($file, 'r');

while($reg = fgetcsv($fp)){
 printf("name: %s,gmail: %s,phone: %s,\n", $reg [0],$reg [1],$reg [2]);

}













































// $fileName = "./data\\data.txt";
// file write
/* 
$fp =fopen($fileName,"w");
foreach($studen as $item){  
 // foreach($item as $data){
 //   echo $data." ";    
 //  }
 //  echo PHP_EOL;
 $date =sprintf("%s, %s, %s,\n", $item['name'], $item['age'], $item['email']); 
 fwrite($fp,$date ); 
 }
fclose($fp);
 */

//file read 
// $fp = fopen($fileName, 'r');
// while($studen = fgets($fp)){
//  // $date =sprintf("%s, %s, %s,\n", $studen[0], $studen[1], $studen[2]);
//  echo $studen;
// }
// fclose($fp);

