<?php

chdir('..');

require_once('lib/autoload.php');

if (isset($_POST['model'])) {
	$modelName = $_POST['model'];
}
if (isset($_POST['method'])) {
	$methodName = $_POST['method'];
}
$params = array();
if (isset($_POST['datas'])) {
	$params = $_POST['datas'];
}

if (class_exists($modelName)) {
	$model = new $modelName();
	if ($model instanceof FmkRpc) {
		$model->execute($methodName, $params);
		echo $model->output();
	} else {
		//echo 'this is not a Rpc model';
	}
} else {
	//echo 'bad model name';
}
