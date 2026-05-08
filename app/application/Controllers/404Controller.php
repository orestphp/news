<?php

namespace Application\Controllers;

use Application\Core\Controller;


/**
 * 404Controller Class
 */

class 404Controller extends Controller
{
	
	function actionIndex()
	{
		$this->view->render('404View.php', 'templateView.php');
	}

}