<?php

$data = [
    'title' => 'Movie awards',
    'awards' => [
        'Oscars',
        'Golden Globes',
        'Bafta',
        'Emmy'
    ],
    'current_time' => date('G:i:s')
];

// turn array into variables
// (inbuilt PHP function)
extract($data);

// include 'resources/views/awards/index.blade.php';

var_dump($title);
var_dump($awards);
var_dump($current_time);