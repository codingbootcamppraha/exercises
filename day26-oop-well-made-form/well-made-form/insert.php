<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// prepare an empty entity
$song = new Song;

// update name property from request if it is there, or no change
$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;

// insert into DB and get ID
$id = insert($song);

// inform the user (to be updated)
echo 'Song inserted with ID ' . $id;