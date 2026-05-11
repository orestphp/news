<?php

namespace Application\Models;

use Application\Core\Model;

/**
 * ArticlesModel Class
 */

class ArticlesModel extends Model
{

	public static $table = "articles";

    protected int $id;
    protected ?string $image;
    protected string $name;
    protected ?string $description;
    protected string $content_text;
    protected int $views_count;

    protected string $date_created;
    protected string $date_update;

    static int $pageLimit = 10;

	public static function getAllArticles(int $page = 1) : array
	{
        $limit = static::$pageLimit;
        $offset = ($page - 1) * $limit;

        $sql = "SELECT a.*, 
            (
                SELECT JSON_ARRAYAGG(
                    JSON_OBJECT('id', c.id, 'name', c.name)
                )
                FROM article_to_category atc
                JOIN categories c ON atc.category_id = c.id
                WHERE atc.article_id = a.id
            ) as categories
            FROM " . self::$table . " a
            GROUP BY a.id
            ORDER BY a.created_at DESC
            LIMIT :limit OFFSET :offset";

        $query = static::$pdo->prepare($sql);

        $query->bindValue(':limit', (int) $limit, static::$pdo::PARAM_INT);
        $query->bindValue(':offset', (int) $offset, static::$pdo::PARAM_INT);
        $query->execute();

        $articles = $query->fetchAll(static::$pdo::FETCH_ASSOC);

        // convert JSON to PHP array
        foreach ($articles as &$article) {
            $article['categories'] = json_decode($article['categories'] ?? '[]', true);
        }

        return $articles;
	}

	static function getCountArticles()
    {
        $query = static::$pdo->prepare('SELECT COUNT(*) FROM articles');
        $query->execute();
        return $query->fetchColumn();
    }

}