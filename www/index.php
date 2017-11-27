<?php

chdir('..');

require_once('lib/autoload.php');

$page = (isset($_GET['page'])) ? $_GET['page'] : 'home';

$url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (parse_url($url, PHP_URL_HOST) == 'centre-equestre-de-freigne.com') {
	header('location: http'.(($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://").'www.centre-equestre-de-freigne.com', true, 301);
}

$params = array('page' => $page);
echo Template::load('global', $params);

