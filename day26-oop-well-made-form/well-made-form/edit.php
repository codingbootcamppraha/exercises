<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// get the id from the URL
$id = $_GET['id'] ?? null;

if (!$id) {
    die('This page must be opened with id=X in the URL address. Did you forget it?');
}

// retrieve the correct song from the database
$song = find($id, 'Song');

?>

<!-- display the form prefilled with entity data -->

<form action="update.php?id=<?= $song->id ?>" method="post">

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