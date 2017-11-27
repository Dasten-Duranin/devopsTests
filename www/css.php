<?php

chdir('..');

$file = $_GET['file'];
$ext = $_GET['ext'];
$cssPath = 'skins/'.$file.'.'.$ext;

if (file_exists($cssPath)) {
	$content .= file_get_contents($cssPath);     
	$mtime  = filemtime($cssPath);
}

if($content) { 
	header('Expires: ' . date('r', time()+172800));
	header('Cache-Control: public, max-age=172800');
	header('Pragma: public');
	header('Last-Modified: '.gmdate('r', $mtime) . " GMT");
	header('Content-Type: text/css; charset=utf-8');
	echo $content;
} else {
	header( 'HTTP/1.0 404 Not Found');
	exit();
}

