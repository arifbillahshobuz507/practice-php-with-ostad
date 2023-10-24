<?php

$file = "./textfile\aextfile.txt";

if(is_readable($file))
{
 $fp = fopen($file, 'r');

 while ($file = fgets($fp)) 
  {
   echo $file;
  };
 rewind($fp); // rewind change mouse curser ponter being/starting point
 while ($file = fgets($fp)) 
  {
   echo $file;
  };
 rewind($fp); // rewind change mouse curser ponter being/starting point
 while ($file = fgets($fp)) 
  {
   echo $file;
  };

 fclose($fp);
}else
{
 echo "somthing is wrong";
}

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$hello = '';
if(is_readable($hello))
{
 $fp = fopen($file, 'r');

 while ($file = fgets($fp)) 
  {
   echo $file;
  };
 rewind($fp); // rewind change mouse curser ponter being/starting point
 while ($file = fgets($fp)) 
  {
   echo $file;
  };
 rewind($fp); // rewind change mouse curser ponter being/starting point
 while ($file = fgets($fp)) 
  {
   echo $file;
  };

 fclose($fp);
}else
{
 echo "somthing is wrong";
}
