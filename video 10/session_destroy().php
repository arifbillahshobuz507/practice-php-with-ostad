<?php
session_name('application');
session_start();

session_destroy();
echo "session delet successfull";
