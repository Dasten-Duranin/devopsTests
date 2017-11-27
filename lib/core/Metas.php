<?php

/**
 * Class Metas
 */

class Metas {
	
	public static function getMetas($page)
	{
		$metasTags = '';
		$context = new Context();

		$metasArray = $context->getMetas();

		if (isset($metasArray[$page])) {
			$metas = $metasArray[$page];
			if (isset($metas['title'])) {
				$metasTags .= '<title>'.$metas['title'].'</title>';	
			}
			if (isset($metas['description'])) {
				$metasTags .= '<meta name="description" content="'.$metas['description'].'">';
			}
			if (isset($metas['keywords'])) {
				$metasTags .= '<meta name="keywords" content="'.$metas['keywords'].'">';
			}
			return $metasTags;
		}
	}
	public static function templateIsPage($page) {
		$context = new Context();
		$metas = $context->getMetas();
		$isPage = false;

		if (isset($metas[$page]['title'])) {
			$isPage = true;	
		}
	return $isPage;
	}
}
