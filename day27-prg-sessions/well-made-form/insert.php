<?php

require_once 'bootstrap.php';

$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'Name is a required field.';
}

if (empty($_POST['author'])) {
    $valid = false;
    $errors[] = 'Author is a required field.';
}

if (!$valid) {
    session()->flash('errors', $errors);
    session()->flashRequest();

    header('Location: create.php');
    exit();
}


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
$_SESSION['success_message'] = 'Song inserted with ID ' . $id;

// redirect the user to edit form for this song
header('Location: edit.php?id=' . $id);
exit();