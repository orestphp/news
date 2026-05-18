<?php

namespace Application\Models;

use Application\Core\Model;
use Application\Core\Route;

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

	static function getAllArticles(int $page = 1, int $sortDate = 0, int $sortViews = 0) : array
	{
        $limit = static::$pageLimit;
        $offset = ($page - 1) * $limit;

        // Sort articles
        if ($sortDate===1 && $sortViews===1)
            $order = 'a.created_at, a.views_count DESC';
        else if (!$sortDate && !$sortViews)
            $order = 'a.created_at DESC';
        else if (!$sortDate && $sortViews)
            $order = 'a.views_count DESC';
        else
            $order = 'a.created_at ASC';


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
            ORDER BY ". $order ." 
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

	// Get article
	static function getArticle(int $id) : array
    {
        $query = static::$pdo->prepare('SELECT * FROM articles WHERE id = '. $id);
        $query->execute();
        return $query->fetch(static::$pdo::FETCH_ASSOC);
    }

    // Count all articles (for pagination)
	static function countArticles() : int
    {
        $query = static::$pdo->prepare('SELECT COUNT(*) FROM articles');
        $query->execute();
        return (int) $query->fetchColumn();
    }

    // Count Category articles
	static function countCategoryArticles(int $categoryId) : int
    {
        $query = static::$pdo->prepare('SELECT 
                a.*
                FROM articles a
                JOIN article_to_category atc ON a.id = atc.article_id
                WHERE atc.category_id =' . $categoryId);
        $query->execute();
        return (int) $query->fetchColumn();
    }

    public static function getCategoryArticles(mixed $categoryId, int $sortDate = 0, int $sortViews = 0) : array
    {
        $page = (Route::inputGet('page')) ? (int) Route::inputGet('page') : 1;
        $offset = ($page - 1) * static::$pageLimit;

        // Sort articles
        if ($sortDate===1 && $sortViews===1)
            $order = 'a.created_at, a.views_count DESC';
        else if (!$sortDate && !$sortViews)
            $order = 'a.created_at DESC';
        else if (!$sortDate && $sortViews)
            $order = 'a.views_count DESC';
        else
            $order = 'a.created_at ASC';

        if (is_array($categoryId)) {
            $sql = "SELECT 
                        c.id AS category_id, 
                        c.name AS category_name, 
                        c.description AS category_description, 
                        a.id, 
                        a.name, 
                        a.image,
                        a.description,
                        a.views_count,
                        a.content_text,
                        a.created_at
                    FROM categories c
                    INNER JOIN article_to_category atc ON c.id = atc.category_id
                    INNER JOIN articles a ON atc.article_id = a.id
                    WHERE c.id IN (" . implode(', ', $categoryId) . ") 
                    ORDER BY " . $order;
        } else {
            $sql = "SELECT 
                        c.id AS category_id, 
                        c.name AS category_name, 
                        c.description AS category_description, 
                        a.id, 
                        a.name, 
                        a.image,
                        a.description,
                        a.views_count,
                        a.content_text,
                        a.created_at
                    FROM categories c
                    INNER JOIN article_to_category atc ON c.id = atc.category_id
                    INNER JOIN articles a ON atc.article_id = a.id
                    WHERE c.id = " . (int)$categoryId . "
                    ORDER BY " . $order . "
                    LIMIT " . static::$pageLimit . " OFFSET " . $offset;
        }

        $query = static::$pdo->query($sql);
        $categoryArticles = $query->fetchAll(static::$pdo::FETCH_ASSOC);

        return $categoryArticles;
    }
}