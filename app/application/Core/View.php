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

	// Pass data to the view
	function render($contentView, $data = [], $pages = [])
	{
		// Convert array elements to variables
		if(is_array($data)) {
			extract($data);
		}

        // Smarty
        require_once __DIR__ . '/../../vendor/smarty/smarty/libs/Smarty.class.php';
        $smarty = new Smarty();
        $layoutPath = realpath(__DIR__ . '/../smarty/');
        $smarty->setTemplateDir($layoutPath . '/templates/');
        $smarty->setCompileDir($layoutPath . '/templates_c/');
        $smarty->setCacheDir($layoutPath . '/cache/');
        $smarty->setConfigDir($layoutPath . '/configs/');

        // Pass global Functions
        $smarty->registerPlugin("function", "tt", "tt");
        $smarty->registerPlugin("function", "td", "td");

        // Pass Variables to view
        $smarty->assign('data', $data, true);

        // Display Template
        $smarty->display($contentView . '.tpl');

        /**
         * NOTE: to test $data, copy-past in template
         *
        <pre>
            {tt data=$data}
        </pre>

         */
	}
}