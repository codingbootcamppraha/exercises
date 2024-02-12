<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// prepare an empty entity
$song = new Song;

?>

<!-- display the form prefilled with entity data -->

<form action="insert.php" method="post">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars((string)$song->name) ?>">
    <br><br>

    <label>Author:</label><br>
    <input type="text" name="author" value="<?= $song->author ?>">
    <br><br>

    <label>Length:</label><br>
    <input type="number" name="length" value="<?= $song->length ?>">
    <br><br>

    <label>Album:</label><br>
    <input type="text" name="album" value="<?= $song->album ?>">
    <br><br>

    <button>Submit</button>

</form>