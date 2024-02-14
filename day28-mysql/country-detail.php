<?php

require_once 'DB.php';
require_once 'Country.php';

DB::connect('127.0.0.1', 'world', 'root', '');

$id = $_GET['id'] ?? null;

if (!$id) {
    die('ID not found');
}

$country = DB::selectOne("
    SELECT *
    FROM `countries`
    WHERE `id` = ?
    LIMIT 1
", [
    $id
]);

$cities = DB::select("
    SELECT *
    FROM `cities`
    WHERE `country_id` = ?
    ORDER BY `name` ASC
", [
    $id
]);

?>

<a href="mysql-test.php">Back</a>

<h1><?= $country->name ?></h1>

<h2>Cities</h2>

<ul>
    <?php foreach ($cities as $city) : ?>
        <li>
            <?= $city->name ?>
        </li>
    <?php endforeach; ?>
</ul>