<?php

namespace Application\Core;

use Application\Models\CategoriesModel;

/**
 * Controller Class
 */
abstract class Controller
{
    public View $view;
    public array $categories;

    function __construct()
    {
        $this->view = new View;

        // All categories
        $this->categories = CategoriesModel::getAllCategories();
        // 404 Page Not Found
        if(!$this->categories) {
            Route::errorPage404();
        }
    }


	public function actionIndex()
	{
		echo 'Eroror: "actionIndex()" does\'t exist !';
		exit;
	}
}