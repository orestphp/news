<?php

namespace Application\Models;

use Application\Core\Model;

/**
 * CategoriesModel Class
 */

class CategoriesModel extends Model
{

	public static $table = "categories";

	public int $id;
	public string $name;

	public function getData()
	{	

	}

}