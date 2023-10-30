<?php
// $file = getcwd(). trim('\sesson_start().php');

session_name('application');
session_start([
 'cookie_lifetime' => 60
]);
$_SESSION['name'] = "arif";
$_SESSION['gmail'] = "<br/>arifbillahshobuz@gamil.com <br/>";

echo $_SESSION['name'], $_SESSION['gmail'];
