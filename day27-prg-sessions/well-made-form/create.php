<?php

require_once 'bootstrap.php';

// prepare an empty entity
$song = new Song;

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

<form action="insert.php" method="post">

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

</form>