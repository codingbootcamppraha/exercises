<?php

$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];

$messages = [
    'error' => [
        'Stuff failed'
    ],
    'warning' => [

    ],
    'info' => [
        'Preparing to do some stuff...',
        'Doing amazing stuff...',
    ],
    'success' => [
        'Stuff is done.'
    ]

];

// $messages = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline foreach loop & condition</title>

    <style>
        .message--success {
            background-color: lightgreen;
        }
    </style>
</head>
<body>

    <?php // if ($messages) : ?>
    <?php // if (count($messages)) : ?>
    <?php if (count($messages) !== 0) : ?>

        <ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">

            <?php foreach ($messages as $type => $type_message) : ?>

                <?php foreach ($type_message as $message) : ?>
                    <li class="message message--<?= $type ?>">
                        <?= $message ?>
                    </li>
                <?php endforeach; ?>

            <?php endforeach; ?>

        </ul>

    <?php endif; ?>

</body>
</html>