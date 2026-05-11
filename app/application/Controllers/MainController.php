<?php

namespace Application\Controllers;

use Application\Core\Controller;
use Application\Core\Route;
use Application\Core\View;
use Application\Core\Model;
use Application\Models\ArticlesModel;
use Application\Models\CategoriesModel;

/**
 * MainController Class
 */

class MainController extends Controller
{
    public Model $model;

    // initialized in parent class
    public View $view;
    public array $categories;

    public function __construct(Model $model)
    {
        $this->model = $model;

        parent::__construct();
    }

    public function actionIndex()
	{
	    // Page number
        $currentPage = (Route::inputGet('page')) ? (int) Route::inputGet('page') : 1;

        // All categories with articles
        $categoriesAndArticles = CategoriesModel::getCategoriesWithArticles();

        // Render
		$this->view->render('main',
            // $data
            [
                'categories' => $categoriesAndArticles,
                'currentPage' => $currentPage,
                'totalPages' => 1,
            ]
        );
	}

	public function actionTask()
	{
		$this->view->render('task',
            // $data
            [
                'categories' => $this->categories,
            ]
        );
	}

	public function actionContacts()
	{
		$this->view->render('contacts',
            // $data
            [
                'categories' => $this->categories,
            ]
        );
	}
}