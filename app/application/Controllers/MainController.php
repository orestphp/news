<?php

namespace Application\Controllers;

use Application\Core\Controller;
use Application\Core\View;
use Application\Core\Model;

/**
 * MainController Class
 */

class MainController extends Controller
{
    public Model $model;
    public View $view;

    public function __construct(View $view, Model $model)
    {
        $this->view = $view;
        $this->model = $model;
    }

    public function actionIndex()
	{	
		$this->view->render('main');
	}

	public function actionTask()
	{
		$this->view->render('task');
	}

	public function actionContact()
	{
		$this->view->render('contact');
	}
}