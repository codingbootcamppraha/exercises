<?php

// ?
// hello=world&name=Jan&today=friday

// var_dump( $_SERVER );
var_dump( $_GET );
var_dump( $_POST );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling requests</title>
</head>
<body>

    <h1>Handling requests</h1>

    <h2>Hello, <?= $_GET['name'] ?>, today is <?= $_GET['today'] ?></h2>

</body>
</html>