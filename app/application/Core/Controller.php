<?php

namespace Application\Core;

/**
 * Main Controller Class
 */
abstract class Controller
{
	public function actionIndex()
	{
		echo 'Eroror: "actionIndex()" does\'t exist !';
		exit;
	}
}