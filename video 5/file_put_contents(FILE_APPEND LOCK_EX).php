<?php
$fp = "./text_file\\text_file.txt";
file_put_contents($fp, "arif\n", FILE_APPEND | LOCK_EX);//file_put_content(FILE_APPEND) creat new data but don't remove old data 
//LOCK_EX create data one by one,,, means LOCK_EX first create first data than create 2nd data to be continew