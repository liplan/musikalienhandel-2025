<?php
require "../lib/lessc.inc.php";
$file 				= 'style';
$path 				= '../css/';
$path_output 	= '../css-output/';

$less = new lessc;
$less->setFormatter("compressed");
$less->checkedCompile($path.$file.".less", $path_output.$file.".css");
//$less->compileFile($path.$file.".less", $path.$file.".css");
header('Content-type: text/css');
echo file_get_contents($path_output.$file.".css");
?>
