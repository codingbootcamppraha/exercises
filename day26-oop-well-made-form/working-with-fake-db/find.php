<?php

require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $track = find($id, 'AudioTrack');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="list.php">Back to list</a>

    <?php if (!empty($track)) : ?>

        <h1>Detail of track #<?= $track->id ?></h1>

    <?php else : ?>

        <h1>Track not found</h1>

    <?php endif; ?>

</body>
</html>