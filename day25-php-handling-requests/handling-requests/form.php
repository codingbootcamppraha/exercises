<?php

var_dump( $_GET );
var_dump( $_POST );
var_dump( $_FILES );

if ($_POST) { // if $_POST is not an empty array - if something was submitted
    // deal with the submitted data

    // save the contact message into the DB

    // redirect somewhere else
    //      - GET request to another page
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling POST</title>
</head>
<body>

    <?php if (!empty($_POST['subject'])) : ?>
        <h2>Thank you for your message <?= $_POST['subject'] ?></h2>
    <?php endif; ?>

    <form action="" method="post" enctype="multipart/form-data">

        <input type="text" name="subject" value=""><br />
        <textarea name="text" cols="30" rows="10"></textarea><br />

        <input type="checkbox" name="newsletter" value="1">

        <input type="radio" name="hapiness" value="1">
        <input type="radio" name="hapiness" value="2">
        <input type="radio" name="hapiness" value="3">
        <input type="radio" name="hapiness" value="4">

        <select name="gender">
            <option value="m">male</option>
            <option value="f">female</option>
            <option value="o">other</option>
        </select>

        <input type="file" name="upload">

        <input type="submit" value="Submit form with POST">

    </form>

</body>
</html>