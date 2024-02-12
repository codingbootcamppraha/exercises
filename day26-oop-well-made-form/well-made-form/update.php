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

$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;

// update the record in the database
update($id, $song);

// inform the user
echo 'Song #' . $id . ' successfully updated';