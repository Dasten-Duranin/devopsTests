<?php                                                                                                                                                                                                               
/**
 * @description Fichier de gestion du chargement des objets
 * @package lib
 * @category creation-site-web
 * @copyright 2013 Viaduc®
 */

function __autoload ($class)
{
    // HERE WE CAN DEFINE DEFAULT PATH FOR MOST COMMON ELEMENT
    $predefinedPath = array(
        // Core
        'Template' => 'lib/core/',
        'Context'  => 'lib/core/',
        'Metas'    => 'lib/core/',
        'FmkRpc'   => 'lib/core/',
        'Valid'    => 'models/',
	);

    if (array_key_exists($class,$predefinedPath)) {
        $classPath = $predefinedPath[$class].$class.'.php';

        if (file_exists($classPath)) {
            require_once($classPath);

            if (class_exists($class)) {
                return ;
            }     
        }     
    }

    if (class_exists('Debug',false)) {
        Debug::log('CLASS "'.$class.'",  LOADING NOT OPTIMIZED.',Debug::TYPE_INFO);
    }        

}

spl_autoload_register("__autoload");
