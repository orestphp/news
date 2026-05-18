<?php

namespace Application\Core;

use Application\Controllers\MainController;

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

        if (strpos($_SERVER['REQUEST_URI'], "?")) {
            $dirtyRoutes = explode('?', $_SERVER['REQUEST_URI']);
            $routes = explode('/', $dirtyRoutes[0]);
        } else {
            $routes = explode('/', $_SERVER['REQUEST_URI']);
        }

        /**
         * http://URL/controller/action
         */
		// controller
		$controllerName = !empty($routes[1]) ? $routes[1] : $controllerName;
		// action
        $actionName = !empty($routes[2]) ? ucfirst($routes[2]) : $actionName;
        if (str_contains($actionName, '-')) {
            $aActionName = explode('-', $actionName);
            if (sizeof($aActionName) === 2)
                $actionName = ucfirst($aActionName[0]) . ucfirst($aActionName[1]);
        }
        $actionName = 'action' . $actionName;

        // model id
        $modelId = !empty($routes[3]) ? $routes[3] : null;

        // MVC
        $ModelClass      = 'Application\Core\Models\\' . ucfirst($controllerName . 'Model');
        $model = class_exists($ModelClass) ? new $ModelClass : new Model;
        $ControllerClass = 'Application\Controllers\\' . ucfirst($controllerName) . 'Controller';
        $controller = class_exists($ControllerClass) ? new $ControllerClass($model) : new MainController($model);

        // Check action
		if (method_exists($controller, $actionName))
		{
			// Call controller & action
			$controller->$actionName($modelId);
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
        if (!empty($paramName) && isset($_POST[$paramName])) {
            $postValue = trim(htmlspecialchars($_POST[$paramName], ENT_QUOTES, 'UTF-8'));
            if ($paramName === "email")
                $postValue = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }
		return  $postValue;
	}

	static function inputGet($paramName = '')
	{
        $getValue = null;
        if (!empty($paramName) && isset($_GET[$paramName])) {
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