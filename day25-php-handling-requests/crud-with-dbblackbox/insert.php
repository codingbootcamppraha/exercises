<?php

require_once 'DBBlackbox.php';

// create an array to be saved from information from POST
$review = [
    'movie' => $_POST['movie'] ?? null,
    'text' => $_POST['text'] ?? null,
    'rating' => $_POST['rating'] ?? null
];

// insert the review and get the ID
$id = insert($review);

// inform the user
echo 'A new review was inserted with ID ' . $id;