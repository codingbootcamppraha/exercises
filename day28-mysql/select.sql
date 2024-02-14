SELECT *
FROM `countries`;


SELECT *
FROM `countries`
WHERE `population` > 20000000;


SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` ASC;


SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` ASC
LIMIT 10;


SELECT `id`, `name`, `population`
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` ASC
LIMIT 10;


SELECT *
FROM `countries`
WHERE `name` = 'Czech Republic'
LIMIT 1;

-- id 56

SELECT *
FROM `cities`
WHERE `country_id` = 56
ORDER BY `population` DESC
LIMIT 10;

SELECT *
FROM `countries`
ORDER BY `continent` = 'Europe' DESC,
    `name` ASC;

SELECT *
FROM `countries`
ORDER BY `continent` = 'Europe' DESC,
    `name` ASC
LIMIT 20, 10;