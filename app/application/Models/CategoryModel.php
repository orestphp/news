<?php

namespace Application\Models;

use Application\Core\Model;

/**
 * CategoryModel Class
 */

class CategoryModel extends Model
{

	public static $table = "category";

	public int $id;
	public string $name;

	public function getData()
	{	

	}

}