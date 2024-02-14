<?php

require_once 'DB.php';
// require_once 'DB_functions.php';
require_once 'Country.php';

DB::connect('127.0.0.1', 'world', 'root', '');

$query = "
    SELECT *
    FROM `countries`
    WHERE `population` > ?
    ORDER BY `population` ASC
    LIMIT 10
";

$results = DB::select($query, [20000000], 'Country');

?>

<ul>

    <?php foreach ($results as $country) : ?>
        <li>
            <a href="country-detail.php?id=<?= $country->id ?>">
                <?= $country->name ?><br>
            </a>
            (population: <?= $country->getFormattedPopulation() ?>)<br>
            Capital: <?= $country->getCapitalCity()->name ?>
        </li>
    <?php endforeach; ?>

</ul>


