<?php

namespace Application\Core;

use Smarty\Smarty;

/**
 * Main View Class
 */

class View
{
	// Default view template
	public string $layoutPath = __DIR__ . '/../Views/layout/templateView.php';
	
	function render($contentView, $vars = [])
	{
		// Convert array elements to variables
		if(is_array($vars)) {
			extract($vars);
		}

        // Smarty

        // Layout views
        require_once __DIR__ . '/../../vendor/smarty/smarty/libs/Smarty.class.php';
        $smarty = new Smarty();
        $layoutPath = realpath(__DIR__ . '/../smarty/');
        $smarty->setTemplateDir($layoutPath . '/templates/');
        $smarty->setCompileDir($layoutPath . '/templates_c/');
        $smarty->setCacheDir($layoutPath . '/cache/');
        $smarty->setConfigDir($layoutPath . '/configs/');

        // Pass Functions
        $smarty->registerPlugin("function", "tt", "tt");
        $smarty->registerPlugin("function", "td", "td");

        // Pass Variables
        $smarty->assign('vars', $vars, true);
        $smarty->assign('name', 'Today', true);

        // Display Template
        $smarty->display($contentView . '.tpl');

        /**
         * NOTE: to test $vars, copy-past in template
         *
        <pre>
            {tt vars=$vars}
        </pre>

         */
	}
}