<?php

namespace Application\Models;

use Application\Core\Model;

/**
 * ArticlesModel Class
 */

class ArticlesModel extends Model
{

	public static $table = "articles";

    public int $id;
    public ?string $image;
    public string $name;
    public ?string $description;
    public string $content_text;
    public int $views_count;

    public string $date_created;
    public string $date_update;

	public static function getAllArticles()
	{
        $sql = "SELECT a.*, GROUP_CONCAT(c.name SEPARATOR ', ') as categories
                FROM " . self::$table . " a
                LEFT JOIN article_to_category atc ON a.id = atc.article_id
                LEFT JOIN category c ON atc.category_id = c.id
                GROUP BY a.id
                ORDER BY a.date_created DESC";

        return Model::execute($sql)->fetchAll();
	}

}