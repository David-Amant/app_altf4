<?php

require('lib\AltFram\SplClassLoader.php');

error_reporting(E_ALL); 
ini_set('display_errors', 'on');

$AltFram = new SplClassLoader("AltFram", "/lib");
$AltFram->register(); 


?>