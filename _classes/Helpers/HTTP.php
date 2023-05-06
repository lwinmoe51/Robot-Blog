<?php

namespace Helpers;


class HTTP
{
	public $base = "http://localhost/php_pr/Robot-blog";

	// public function redirect($path, $query_params = array())
	// {
	// 	$url = $this->base . $path;


	// 	if ($query_params) {
	// 		$query_string = http_build_query($query_params);
	// 		$url .= "?$query_string";
	// 	}
	// 	header("location: $url");
	// 	exit();
	// }

	// public function redirect($path, $query = "")
	// {
	// 	$url = static::$base . $path;
	// 	if ($query) $url .= "?$query";

	// 	header("location: $url");
	// 	exit();
	// }

	public function redirect($path, $query)
	{
		if (is_array($query)) {
			$url = $this->base . $path;
			if ($query) {
				$query_string = http_build_query($query);
				$url .= "?$query_string";
			}
			header("location: $url");
			exit();
		} elseif (is_string($query)) {
			$url = $this->base . $path;
			if ($query) $url .= "?$query";

			header("location: $url");
			exit();
		}
	}
}
