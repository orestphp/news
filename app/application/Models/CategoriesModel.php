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

	public static function getAllCategories() : array
	{
        $sql = "SELECT * FROM categories ORDER BY created_at";

        $categories = static::$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return $categories;
	}

    public static function getCategoriesWithArticles() : array
    {
        // main.tpl - limit per category-articles block and Order by 'created_at' DESC (Home page)
        $limitPerCategoryBlock = 3;

        $sql = "SELECT
                c.id,
                c.name,
                JSON_ARRAYAGG(
                    JSON_OBJECT(
                        'id', res.article_id,
                        'name', res.article_name,
                        'description', res.description,
                        'content_text', res.content_text,
                        'views_count', res.views_count,
                        'image', res.image,
                        'created_at', res.created_at
                    )
                ) AS articles
            FROM categories c
            LEFT JOIN (
                    SELECT
                    atc.category_id,
                    a.id AS article_id,
                    a.name AS article_name,
                    a.description,
                    a.content_text,
                    a.views_count,
                    a.image,
                    a.created_at,
                    ROW_NUMBER() OVER (PARTITION BY atc.category_id ORDER BY a.created_at DESC) as rn
                FROM article_to_category atc
                JOIN articles a ON atc.article_id = a.id
            ) res ON res.category_id = c.id AND res.rn <= " . $limitPerCategoryBlock. "
            GROUP BY c.id
            ORDER BY c.name ASC";
        $categories = static::$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach ($categories as &$category) {
            $category['articles'] = json_decode($category['articles'] ?? '[]', true);
        }

        return array_reverse($categories);
    }

    static function getCategoryById(int $categoryId)
    {
        $query = static::$pdo->prepare('SELECT * FROM categories WHERE id = '. $categoryId);
        $query->execute();
        return $query->fetch(static::$pdo::FETCH_ASSOC);
    }

    static function getCategoriesByArticleId(int $articleId)
    {
        $sql = "SELECT c.id, c.name 
            FROM categories c
            JOIN article_to_category atc ON c.id = atc.category_id
            WHERE atc.article_id = :art_id";

        $stmt = static::$pdo->prepare($sql);
        $stmt->execute(['art_id' => $articleId]);

        return $stmt->fetchAll(static::$pdo::FETCH_ASSOC);
    }
}