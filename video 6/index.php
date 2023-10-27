<?php
$studens = [
 [
  "name"=>"arif",
  "age"=>23,
  "email"=>"arif@gmail.com",
 ],
 [
  "name"=>"billah",
  "age"=>24,
  "email"=>"arifbillah@gmail.com",
 ],
 [
  "name"=>"hi",
  "age"=>25,
  "email"=>"arifbillahshobuz@gmail.com",
 ]
];

$file= getcwd().trim('   /data/data.txt'  );
// writ to array
/* 
$exdata = file_get_contents($file);
// echo $exdata;
$fp = fopen($file , "w+");
 fwrite($fp , $exdata);
 // rewind($fp);
foreach($studens as $student){
 $line = sprintf("\n%s,%s,%s",$student['name'],$student["age"], $student["email"]);
 $data = fwrite($fp, $line); 
 // print_r($student);
}
fclose($fp);
*/

$fp = fopen($file ,'r+');


while($fileName = fgets($fp)){
 $line = explode (",", $fileName);
 printf("name : %s,\nage : %s,\nemail : %s\n",$line[0],$line[1], $line[2]);


};
// $result = fgets($fp);



fclose($fp);