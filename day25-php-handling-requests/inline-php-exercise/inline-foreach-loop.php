<?php

$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline foreach loop</title>
</head>
<body>

    <table>
        <tr>
            <th>Means of transport</th>
            <th>Max. speed (km/h)</th>
        <tr>

        <?php foreach ($vehicles as $vehicle_name => $speed) : ?>

            <tr>
                <td><?= $vehicle_name ?></td>
                <td><?= $speed ?></td>
            </tr>

        <?php endforeach; ?>


    </table>

</body>
</html>