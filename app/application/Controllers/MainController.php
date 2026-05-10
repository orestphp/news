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
    public View $view;

    public function __construct(View $view, Model $model)
    {
        $this->view = $view;
        $this->model = $model;
    }

    public function actionIndex()
	{
	    // Page number
        $currentPage = (Route::inputGet('page')) ? (int) Route::inputGet('page') : 1;

        // All categories
        $categories = CategoriesModel::getCategories();

        // All articles
        $countArticles = (int) ArticlesModel::getCountArticles();
        $articles = ArticlesModel::getArticles($currentPage);

		$this->view->render('main',
            // $data
            [
                'categories' => $categories,
                'articles' => $articles,
                'currentPage' => $currentPage,
                'totalPages' => ceil($countArticles / ArticlesModel::$pageLimit)
            ]

        );
	}

	public function actionTask()
	{
		$this->view->render('task');
	}

	public function actionContacts()
	{
		$this->view->render('contacts');
	}
}