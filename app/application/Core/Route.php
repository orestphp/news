<?php

namespace Application\Core;

use Application\Core\View;
use Application\Core\Model;

/**
 * Route Class
 */

abstract class Route
{
	static function start()
	{
		// Default controller and action
		$controllerName = 'Main';
		$actionName = 'Index';

		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// Controller
		if ( !empty($routes[1]) )
		{	
			$controllerName = $routes[1];
		}
		
		// Action
		if ( !empty($routes[2]) )
		{
			$actionName = $routes[2];
		}

		// MVC
		$ModelClass      = 'Application\Core\Models\\' . ucfirst($controllerName . 'Model');
        $model = class_exists($ModelClass) ? new $ModelClass : new Model;
        $view = new View;
        $ControllerClass = 'Application\Controllers\\' . ucfirst($controllerName) . 'Controller';

        $actionName = 'action' . ucfirst($actionName);

        // Create controller
        $controller = new $ControllerClass($view, $model);
		
		if(method_exists($controller, $actionName))
		{
			// Call controller action
			$controller->$actionName();
		} else {
			// Page Not Found
			Route::errorPage404();
		}
	
	}
	
	static function errorPage404()
	{
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:' . $host . '404');
    }

	static function inputPost($paramName = '')
	{
        $postValue = null;
        if(!empty($paramName) && isset($_POST[$paramName])) {
            $postValue = trim(htmlspecialchars($_POST[$paramName], ENT_QUOTES, 'UTF-8'));
            if($paramName === "email")
                $postValue = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }
		return  $postValue;
	}

	static function inputGet($paramName = '')
	{
        $getValue = null;
        if(!empty($paramName) && isset($_GET[$paramName])) {
            $getValue = trim(htmlspecialchars($_GET[$paramName], ENT_QUOTES, 'UTF-8'));
        }
        return  $getValue;
	}

	static function inputFile($paramName = '')
	{
		return (!empty($paramName) && isset($_FILES[$paramName])) ? $_FILES[$paramName] : null;
	}

	static function redirect($to)
	{
		header("Location: " . $to);
	}
}