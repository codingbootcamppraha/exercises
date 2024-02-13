<?php

require_once 'bootstrap.php';


// find the ID of the record we want to edit in the request
// if it is there
$id = $_GET['id'] ?? null;

if ($id) {
    // edit
    $song = find( $id, 'Song' );
} else {
    // create
    $song = new Song;
}

// take the value of success_message from the session if it is there
$success_message = session()->get('success_message', null);

$errors = session()->get('errors', []);

?>

<?php if ($id) : ?>
    <h1>Edit a song</h1>
<?php else : ?>
    <h1>Create a new song</h1>
<?php endif; ?>

<a class="btn-blue" href="list.php">Back to list</a>

<?php include 'alerts.php'; ?>

<?php if ($id) : ?>
    <form action="store.php?id=<?= $id ?>" method="post">
<?php else : ?>
    <form action="store.php" method="post">
<?php endif; ?>

    <!-- display the form prefilled with entity data -->

    Name:<br>
    <input type="text" name="name" value="<?= htmlspecialchars((string) old('name', $song->name)) ?>"><br>
    <br>

    Author:<br>
    <input type="text" name="author" value="<?= htmlspecialchars((string) old('author', $song->author)) ?>"><br>
    <br>

    Length:<br>
    <input type="text" name="length" value="<?= htmlspecialchars((string) old('length', $song->length)  ) ?>"> seconds<br>
    <br>

    Album:<br>
    <input type="text" name="album" value="<?= htmlspecialchars((string) old('album', $song->album)) ?>"
        placeholder="Please fill in the album"
    ><br>
    <br>

    <button type="submit">Save</button>

</form>

<?php include 'footer.php'; ?>