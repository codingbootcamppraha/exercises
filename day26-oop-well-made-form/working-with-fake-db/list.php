<?php

require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';

$tracks = select(null, null, 'AudioTrack');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Audio tracks</h1>

    <ul>
        <?php foreach ($tracks as $track) : ?>
            <li>
                <!--     find.php?id=1 -->
                <a href="find.php?<?= http_build_query(['id' => $track->id]) ?>">
                    <?= $track->name ?> (ID #<?= $track->id ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>