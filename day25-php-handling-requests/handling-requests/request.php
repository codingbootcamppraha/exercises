<?php

// ?
// hello=world&name=Jan&today=friday
// ?hello=world&name=Honza&today=saturday
// ?name=

// var_dump( $_SERVER );
var_dump( $_GET );
var_dump( $_POST );

$value = '';

var_dump( isset($value) );


// if there is 'name' in the GET parameters
if (isset($_GET['name'])) {
    // assign its value to variable $name
    $name = $_GET['name'];
} else {
    // if there is NOT any 'name' in GET parameters
    $name = 'unknown person';
}

// value of $name will be
//   - $_GET['name'] if $_GET['name'] exists and is not null
//   - 'unknown person' otherwise
$name = $_GET['name'] ?? 'unknown person';

$name = $_GET['name'] ?? $_GET['first_name'] ?? $_GET['last_name'] ?? 'unknown';

// if there is 'today' in the GET parameters
//   and it is not empty (falsy value)
if (!empty($_GET['today'])) {

}

$search = 'Bob' ? 'Bob' : 'Hello';
$search = 'Bob' ?: 'Hello';         // same as line above

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling requests</title>
</head>
<body>

    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=about">About us</a>
        <a href="?<?= http_build_query(['page' => 'contact us']) ?>">Contact us</a>
    </nav>

    <h1>Handling requests</h1>

    <h2>Hello, <?= $name ?>, today is <?= $_GET['today'] ?? 'some day' ?></h2>

    <?php if (($_GET['page'] ?? null) === 'home') : ?>

        <h1>Home</h1>

    <?php elseif (($_GET['page'] ?? null) === 'about') : ?>

        <h1>About us</h1>

    <?php else : ?>

        <h1>404: page not found</h1>

    <?php endif; ?>

</body>
</html>