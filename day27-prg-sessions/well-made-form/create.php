<?php

session_start();

require_once 'DBBlackbox.php';
require_once 'Song.php';

if (isset($_SESSION['errors'])) {
    // conclude the flashing of 'errors'
    $errors = $_SESSION['errors'];

    unset($_SESSION['errors']);
}

if (isset($_SESSION['request_data'])) {
    // conclude the flashing of 'request_data'
    $request_data = $_SESSION['request_data'];

    unset($_SESSION['request_data']);
}

// prepare an empty entity
$song = new Song;

?>

<!-- display the form prefilled with entity data -->

<?php if (!empty($errors)) : ?>
    <div class="error-message">
        Validation failed. Please check your data and re-submit the form.
    </div>
    <?php foreach ($errors as $error) : ?>
        <div class="error-message">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<form action="insert.php" method="post">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars($request_data['name'] ?? (string)$song->name) ?>">
    <br><br>

    <label>Author:</label><br>
    <input type="text" name="author" value="<?= $request_data['author'] ?? $song->author ?>">
    <br><br>

    <label>Length:</label><br>
    <input type="number" name="length" value="<?= $request_data['length'] ?? $song->length ?>">
    <br><br>

    <label>Album:</label><br>
    <input type="text" name="album" value="<?= $request_data['album'] ?? $song->album ?>">
    <br><br>

    <button>Submit</button>

</form>