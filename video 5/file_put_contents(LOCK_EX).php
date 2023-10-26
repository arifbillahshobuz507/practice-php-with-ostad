<?php
$fp = "./text_file//text_file.txt";
file_put_contents($fp, "arif\n", LOCK_EX);// LOCK_EX create data one by one,,, means LOCK_EX first create first data than create 2nd data to be continew