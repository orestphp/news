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
        $countArticles = (int) ArticlesModel::countArticles();

        // All $articles
        $articles = ArticlesModel::getAllArticles($currentPage);

        // Render
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

	public function actionCategoryArticles(int $categoryId =  0)
	{
        // Page number
        $currentPage = (Route::inputGet('page')) ? (int) Route::inputGet('page') : 1;

        //Count articles
        $countArticles = (int) ArticlesModel::countCategoryArticles($categoryId);

        // All categories with articles
        $categoryArticles = ArticlesModel::getCategoryArticles($categoryId);

        // Render
        $this->view->render('cat_articles',
            // $data
            [
                'categories' => $this->categories,
                'categoryArticles' => $categoryArticles,
                'currentPage' => $currentPage,
                'totalPages' => ceil($countArticles / ArticlesModel::$pageLimit)
            ]
        );
	}

	// Category articled
	public function actionArticle(int $articleId =  null)
	{
	    // Page number
        $currentPage = (Route::inputGet('page')) ? (int) Route::inputGet('page') : 1;

        // Get article
        $article = ArticlesModel::getArticle($articleId);

        // Render
		$this->view->render('articles',
            // $data
            [
                'categories' => $this->categories,
                'article' => $article,
            ]
        );
	}


}