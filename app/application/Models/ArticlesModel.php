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

    protected string $created_at;
    protected string $updated_at;

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

	// Get all articles (for testing pagination)
	static function countArticles()
    {
        $query = static::$pdo->prepare('SELECT COUNT(*) FROM articles');
        $query->execute();
        return $query->fetchColumn();
    }

    // Count Category articles
	static function countCategoryArticles(int $categoryId)
    {
        $query = static::$pdo->prepare('SELECT 
                a.*
                FROM articles a
                JOIN article_to_category atc ON a.id = atc.article_id
                WHERE atc.category_id =' . $categoryId);
        $query->execute();
        return $query->fetchColumn();
    }

    public static function getCategoryArticles(int $categoryId, int $page = 1) : array
    {
        $limit = static::$pageLimit;
        $offset = ($page - 1) * $limit;

        $sql = "SELECT 
                    c.id AS category_id, 
                    c.name AS category_name, 
                    a.id, 
                    a.name, 
                    a.image,
                    a.description,
                    a.content_text,
                    a.created_at
                FROM categories c
                INNER JOIN article_to_category atc ON c.id = atc.category_id
                INNER JOIN articles a ON atc.article_id = a.id
                WHERE c.id = ". $categoryId ."
                ORDER BY a.created_at DESC
                LIMIT ". $limit ." OFFSET ". $offset;


        $query = static::$pdo->query($sql);
        $categoryArticles = $query->fetchAll(static::$pdo::FETCH_ASSOC);

        return $categoryArticles;
    }
}