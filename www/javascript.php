<?php

chdir('..');

$file = $_GET['file'];
$jsPath = 'javascripts/'.$file.'.js';

if (file_exists($jsPath)) {
	$content .= file_get_contents($jsPath);     
	$mtime  = filemtime($jsPath);
}

if($content) { 
	header('Expires: ' . date('r', time()+172800));
	header('Cache-Control: public, max-age=172800');
	header('Pragma: public');
	header('Last-Modified: '.gmdate('r', $mtime) . " GMT");
	header('Content-Type: text/javascript; charset=utf-8');
	echo $content;
} else {
	header( 'HTTP/1.0 404 Not Found');
	exit();
}

