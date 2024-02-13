<?php

require_once 'bootstrap.php';


// find the ID of the record we want to edit in the request
// if it is there
$id = $_GET['id'] ?? null;

// validation
$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'Name is a required field.';
}

if (!is_numeric($_POST['length'])) {
    $valid = false;
    $errors[] = 'Length must be a number.';
}

if ($valid === false) {

    session()->flash('errors', $errors);
    session()->flashRequest();

    if ($id) {
        header('Location: edit.php?id='.$id);
    } else {
        header('Location: edit.php');
    }
    exit();
}

if ($id) {
    // edit
    $song = find( $id, 'Song' );
} else {
    // create
    $song = new Song;
}

// update entity from request
$song->name     = $_POST['name'] ?? $song->name; // if 'name' was not found in $_POST data, keep the current value
$song->author   = $_POST['author'] ?? $song->author;
$song->length   = intval($_POST['length'] ?? $song->length);
$song->album    = $_POST['album'] ?? $song->album;

// somehow save the data into the database (using the unique ID)
// update($id, $song);
$song->save();

// for the next request (for edit.php)
session()->flash('success_message', 'Song was successfully saved.');

// redirect to edit.php
header('Location: edit.php?id=' . $id);

exit();