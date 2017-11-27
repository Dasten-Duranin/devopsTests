<?php

/**
 * Class Template
 */

class Template {

	const CONTROLLER_PATH = 'controllers/';
	const TEMPLATE_PATH = 'templates/';

	public static function getControllerPath($name)
	{
		return self::CONTROLLER_PATH.$name.'.php';
	}

	public static function getTemplatePath($name)
	{
		return self::TEMPLATE_PATH.$name.'.php';
	}

	public static function load($name, $params = array())
	{
		if (!empty($params)) {
			foreach ($params as $param => $value) {
				$$param = $value;
			}
		}

        if (file_exists(self::getControllerPath($name))) {
            include(self::getControllerPath($name));
        }

        if (file_exists(self::getTemplatePath($name))) {
            ob_start();
            include(self::getTemplatePath($name));
            return ob_get_clean();
        }
	}
}
