<?php

// data preparation

$user_role = 'admin';

$user_age = 13;

$users = [
    'Akhil',
    'Christie',
    'Saiin',
    'Nedelko'
];


function isAdult($age)
{
    return $age >= 18;
}

function renderListOfUsers($users)
{
    foreach ($users as $user) {

        ?>

            <li class="user-item" onclick="alert('Hello');">
                <?= $user ?>
            </li>

        <?php

    }
}

$is_adult = $user_age >= 18;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        if ($user_role === 'admin') {

            foreach ($users as $user_name) {


            }
        }

    ?>

    <?php if ($user_role === 'admin') : ?>

        <?php if (!isAdult($user_age)) : ?>

            <h2>Should you be here, kid?</h2>

        <?php endif; ?>

        <h1>Hello, admininstrator!</h1>

        <h2>Currently present users</h2>

        <ul>

            <?php foreach ($users as $user) : ?>

                <li class="user-item" onclick="alert('Hello');">
                    <?= $user ?>
                </li>

            <?php endforeach; ?>

        </ul>

    <?php endif; ?>

</body>
</html>