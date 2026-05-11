<?php

namespace Application\Controllers;

use Application\Core\Controller;
use Application\Core\Route;
use Application\Core\View;
use Application\Core\Model;
use Application\Models\ArticlesModel;
use Application\Models\CategoriesModel;

/**
 * NewsController Class
 */

class NewsController extends Controller
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

    // all Articles
    public function actionArticles()
	{
	    // Page number
        $currentPage = (Route::inputGet('page')) ? (int) Route::inputGet('page') : 1;

        //Count articles
        $countArticles = (int) ArticlesModel::getCountArticles();

        // All $articles
        $articles = ArticlesModel::getAllArticles($currentPage);

		$this->view->render('articles',
            // $data
            [
                'categories' => $this->categories,
                'articles' => $articles,
                'currentPage' => $currentPage,
                'totalPages' => ceil($countArticles / ArticlesModel::$pageLimit)
            ]

        );
	}


}