<?php
$studen = ["arif", "billah", "shobuz"];
// unlink($studen[1]);
unlink($studen[1]);
print_r($studen);





$fileName = "./data\\data.txt";
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
$fp = fopen($fileName, 'r');
while($studen = fgets($fp)){
 // $date =sprintf("%s, %s, %s,\n", $studen[0], $studen[1], $studen[2]);
 echo $studen;
}
fclose($fp);

