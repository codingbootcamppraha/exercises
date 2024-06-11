<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $country->name ?></title>
</head>
<body>
    <h1><?= $country->name ?></h1>

    <h2>Basic information</h2>
    <ul>
        <li>
            <strong>Continent:</strong> <?= $country->continent ?>
        </li>
        <li>
            <strong>Surface area:</strong> <?= $country->surface_area ?> km<sup>2</sup>
        </li>
        <li>
            <strong>Population:</strong> <?= $country->population ?>
        </li>
    </ul>

    <h2>Cities</h2>
    <?php var_dump($country->cities)?>
    <ul>

        <!-- a foreach loop here -->
        <?php foreach ($country->cities as $city) : ?>
            <li><?= $city->name ?></li>
        <?php endforeach ?>
    </ul>

</body>
</html>