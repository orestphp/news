-- 1.
CREATE TABLE `categories` (
                              `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                              `name` VARCHAR(100) NOT NULL,
                              `description` TEXT,
                              `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 2.
CREATE TABLE `articles` (
                            `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            `name` VARCHAR(255) NOT NULL,
                            `image` VARCHAR(255) DEFAULT NULL,
                            `description` VARCHAR(500),
                            `content_text` LONGTEXT, -- 'text' є зарезервованим словом, краще content_text
                            `views_count` INT UNSIGNED DEFAULT 0,
                            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 3.
CREATE TABLE `article_to_category` (
                                       `article_id` INT UNSIGNED NOT NULL,
                                       `category_id` INT UNSIGNED NOT NULL,
                                       PRIMARY KEY (`article_id`, `category_id`), -- Складений ключ (запобігає дублям)

    -- Зовнішні ключі для цілісності даних
                                       CONSTRAINT `fk_article` FOREIGN KEY (`article_id`)
                                           REFERENCES `articles` (`id`) ON DELETE CASCADE,
                                       CONSTRAINT `fk_category` FOREIGN KEY (`category_id`)
                                           REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB;