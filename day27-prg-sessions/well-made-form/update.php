<?php

require_once 'bootstrap.php';

// get the id from the URL
$id = $_GET['id'] ?? null;

if (!$id) {
    die('This page must be opened with id=X in the URL address. Did you forget it?');
}

// validation:
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

    redirect('edit.php?id=' . $id);
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
$_SESSION['success_message'] = 'Song #' . $id . ' successfully updated';

// redirect the user to edit form for this song
redirect('edit.php?id=' . $id);
