<?php

chdir('..');

$file = $_GET['file'];
$ext = $_GET['ext'];
$picturePath = 'skins/'.$file.'.'.$ext;

if (file_exists($picturePath)) {
	//$mtime = filemtime($filePath);
	$ext = ($ext == 'ico') ? 'x-icon' : $ext;  

	header('Expires: ' . date('r', time() + 604800));
	header('Cache-Control: public, max-age=604800');
	header('Pragma: public');
	//header('Last-Modified: '.gmdate('r', $mtime) . " GMT");
	header('Content-type: image/'.$ext);
	readfile($picturePath);
} else {
	header('HTTP/1.0 404 Not Found');
}
