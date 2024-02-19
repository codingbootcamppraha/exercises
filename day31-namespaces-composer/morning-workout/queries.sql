SELECT *
FROM `movies`
ORDER BY `rating` DESC
LIMIT 10;

SELECT *
FROM `movies`
WHERE `votes_nr` >= 5000
ORDER BY `rating` DESC
LIMIT 10;

SELECT `id`
FROM `movie_types`
WHERE `name` = 'feature';

-- 1

SELECT *
FROM `movies`
WHERE `votes_nr` >= 5000
    AND `movie_type_id` = 1
ORDER BY `rating` DESC
LIMIT 10;

SELECT `movies`.*
FROM `movies`
LEFT JOIN `movie_types`
    ON `movies`.`movie_type_id` = `movie_types`.`id`
WHERE `votes_nr` >= 5000
    AND `movie_types`.`name` = 'feature'
ORDER BY `rating` DESC
LIMIT 10;


SELECT `id`
FROM `movies`
WHERE `name` LIKE '%Shawshank%Redemption%';

-- 111161

INSERT
INTO `movies`
(`name`, `year`)
VALUES
('Dune: Part Two', 2024);

-- 5863127

SELECT `id`
FROM `movies`
WHERE `name` LIKE 'Dune: Part Two';

-- 5863127

UPDATE `movies`
LEFT JOIN `movie_types`
    ON `movie_types`.`name` = 'feature'
SET `movie_type_id` = `movie_types`.`id`,
    `movie_status_id` = 12,
    `certification_id` = 26
WHERE `movies`.`id` = 5863127;


SELECT `movies`.*,
    `movie_types`.`name` AS movie_type_name,
    `movie_statuses`.`slug` AS movie_status_slug,
    `certifications`.`slug` AS certification_slug
FROM `movies`
LEFT JOIN `movie_types`
    ON `movies`.`movie_type_id` = `movie_types`.`id`
LEFT JOIN `movie_statuses`
    ON `movies`.`movie_status_id` = `movie_statuses`.`id`
LEFT JOIN `certifications`
    ON `movies`.`certification_id` = `certifications`.`id`
WHERE `movies`.`id` = 5863127;