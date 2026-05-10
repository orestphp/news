<?php

namespace Application\Models;

use Application\Core\Model;
use PDO;

/**
 * CategoriesModel Class
 */

class CategoriesModel extends Model
{

	public static $table = "categories";

	public int $id;
	public string $name;

	public static function getCategories() : array
	{
        $sql = "SELECT * FROM categories ORDER BY created_at";

        $categories = static::$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return $categories;
	}

}