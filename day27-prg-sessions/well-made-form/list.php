<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// get all the songs
$songs = select(null, null, 'Song');

?>

<a href="create.php">Add a new song</a>

<ul>
    <?php foreach ($songs as $song) : ?>
        <li>
            <?= $song->name ?>

            <a href="edit.php?id=<?= $song->id ?>">edit</a>
        </li>
    <?php endforeach; ?>
</ul>