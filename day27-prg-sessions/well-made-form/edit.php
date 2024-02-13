<?php

require_once 'bootstrap.php';


// get the id from the URL
$id = $_GET['id'] ?? null;

if (!$id) {
    die('This page must be opened with id=X in the URL address. Did you forget it?');
}

// retrieve the correct song from the database
$song = find($id, 'Song');

?>

<!-- display the form prefilled with entity data -->

<?php if (session()->get('errors')) : ?>
    <div class="error-message">
        Validation failed. Please check your data and re-submit the form.
    </div>

    <?php foreach (session()->get('errors') as $error) : ?>
        <div class="error-message">
            <?= $error ?>
        </div>
    <?php endforeach; ?>

<?php endif; ?>

<!-- success message here -->
<?php if (session()->get('success_message')) : ?>
    <div class="success-message">
        <?= session()->get('success_message') ?>
    </div>
<?php endif; ?>

<form action="update.php?id=<?= $song->id ?>" method="post">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars((string)old('name', $song->name)) ?>">
    <br><br>

    <label>Author:</label><br>
    <input type="text" name="author" value="<?= old('author', $song->author) ?>">
    <br><br>

    <label>Length:</label><br>
    <input type="number" name="length" value="<?= old('length', $song->length) ?>">
    <br><br>

    <label>Album:</label><br>
    <input type="text" name="album" value="<?= old('album', $song->album) ?>">
    <br><br>

    <button>Submit</button>
    <input type="reset" value="Clear">

    <button class="empty">Empty form</button>

    <script>
        document.querySelector('.empty').addEventListener('click', event => {
            event.preventDefault();

            document.querySelectorAll('form input').forEach(input => {
                input.value = '';
            })
        })
    </script>
</form>