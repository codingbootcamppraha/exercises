<?php

session_start();

require_once 'DBBlackbox.php';
require_once 'Song.php';

if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];

    // remove it from the session - concluding the "flashing" process
    unset($_SESSION['success_message']);
}

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

// get the id from the URL
$id = $_GET['id'] ?? null;

if (!$id) {
    die('This page must be opened with id=X in the URL address. Did you forget it?');
}

// retrieve the correct song from the database
$song = find($id, 'Song');

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

<!-- success message here -->
<?php if (!empty($success_message)) : ?>
    <div class="success-message">
        <?= $success_message ?>
    </div>
<?php endif; ?>

<form action="update.php?id=<?= $song->id ?>" method="post">

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