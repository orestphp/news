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

		$validURI = explode('/', $_SERVER['REQUEST_URI']);
        $routes = (strpos('?', $_SERVER['REQUEST_URI'])) ?
            explode('/', $validURI[0])
        :
            explode('/', $_SERVER['REQUEST_URI']);

		// Controller
		if ( !empty($routes[1]) && !str_contains('?', $routes[0]))
		{	
			$controllerName = $routes[1];
		}
		
		// Action
		if ( isset($routes[2]) && !empty($routes[2]) && !str_contains('?', $routes[1]))
		{
			$actionName = $routes[2];
		}

        // MVC
        $ModelClass      = 'Application\Core\Models\\' . ucfirst($controllerName . 'Model');
        $model = class_exists($ModelClass) ? new $ModelClass : new Model;
        $view = new View;
        $ControllerClass = 'Application\Controllers\\' . ucfirst($controllerName) . 'Controller';

        // Controller action
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
		echo "404: Page Not Found";
		exit;
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