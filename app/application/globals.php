<?php
// Site config
define("URL", "http://127.0.0.1:8080");

// DB Config
define("DB_HOST", "db");
define("DB_NAME", "news");
define("DB_USER", "root");
define("DB_PASS", "root");


/******************************************************************************* 
* HELPERS FOR TESTING 
* @param mixed
* @return Array 
*******************************************************************************/

function tt()
{
	$arrArgs = func_get_args();
	if (!$arrArgs) return false;
	if (isset($arrArgs[1]) && is_array($arrArgs[0]) && !isset($arrArgs[1]))
	{
		print_r(array(
			$arrArgs[0]
		));
		exit;
	}
	else
	{
		print_r($arrArgs);
		exit;
	}
} 

// var_dump() version
function td()
{
	$arrArgs = func_get_args();
	if (!$arrArgs) return false;
	if (isset($arrArgs[1]) && is_array($arrArgs[0]) && !isset($arrArgs[1]))
	{
		var_dump(array(
			$arrArgs[0]
		));
		exit;
	}
	else
	{
		var_dump($arrArgs);
		exit;
	}
}
