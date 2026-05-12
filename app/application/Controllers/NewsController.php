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
	    // Pagination number
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

        $currentCategory = CategoriesModel::getCategoryById($categoryId);

        //Count articles
        $countArticles = (int) ArticlesModel::countCategoryArticles($categoryId);

        // All categories with articles
        $categoryArticles = ArticlesModel::getCategoryArticles($categoryId);

        // 404 Page Not Found
        if(!$currentCategory || !$countArticles || !$categoryArticles) {
            Route::errorPage404();
        }

        // Render
        $this->view->render('cat_articles',
            // $data
            [
                'currentCategory' => $currentCategory,
                'categories' => $this->categories,
                'categoryArticles' => $categoryArticles,
                'currentPage' => $currentPage,
                'totalPages' => ceil($countArticles / ArticlesModel::$pageLimit)
            ]
        );
	}

	// Get article
	public function actionArticle(int $articleId =  null)
	{
        // Get article
        $article = ArticlesModel::getArticle($articleId);

        // Get article tags (categories)
        $articleTags = CategoriesModel::getCategoriesByArticleId($articleId);

        // Relative articles
        $categoryArticles = $categoryIds = [];
        foreach ($articleTags as $tag) {
            $categoryIds[] = $tag['id'];
        }
        if($articleTags) {
            $categoryArticles = ArticlesModel::getCategoryArticles($categoryIds);
        }

        // 404 Page Not Found
        if(!$article || !$articleTags) {
            Route::errorPage404();
        }

        // Render
		$this->view->render('article',
            // $data
            [
                'categories' => $this->categories,
                'categoryArticles' => $categoryArticles,
                'articleTags' => $articleTags,
                'article' => $article,
            ]
        );
	}


}