<?php

namespace Application\Models;

use Application\Core\Model;

/**
 * CategoriesModel Class
 */

class CategoriesModel extends Model
{

	public static $table = "product";

	public $id;
	public $name;
	public $date;

	public function getData()
	{	

	}

	// API method for Ajax
	public function setCategoryModel($productId, $rating)
	{

	}
}