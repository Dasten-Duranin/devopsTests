<?php

/**
 * Class Context 
 */

class Context {

	const CONF_PATH = 'conf/';


	public function __call($call, $args)
	{
		$request = strtoupper(substr($call, 0, 3));
		$name = strtoupper(substr($call, 3));


		switch($request) {
			case 'GET' :
				switch($name) {
					case 'METAS' :
						include(self::CONF_PATH.'metas.php');
						return $metas;
						break;
				}
				break;
		}
	}
}
