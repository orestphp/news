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
        $sql = "SELECT c.*, 
            (
                SELECT JSON_ARRAYAGG(
                    JSON_OBJECT(
                        'id', a.id, 
                        'name', a.name,
                        'description', a.description,
                        'content_text', a.content_text,
                        'image', a.image,
                        'views_count', a.views_count,
                        'created_at', a.created_at
                    )
                )
                FROM article_to_category atc
                JOIN articles a ON atc.article_id = a.id
                WHERE atc.category_id = c.id
            ) AS articles
            FROM categories c
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