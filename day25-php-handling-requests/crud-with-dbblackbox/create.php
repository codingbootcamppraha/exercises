<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new review</title>
</head>
<body>

    <form action="insert.php" method="post">

        <label for="">Movie name:</label><br>
        <input type="text" name="movie" value="">
        <br><br>

        <label for="">Text:</label><br>
        <textarea name="text" cols="30" rows="10"></textarea>
        <br><br>

        <label for="">Rating:</label><br>
        <input type="number" step="0.1" name="rating" value="5.0">
        <br><br>

        <button>Submit review</button>

    </form>

</body>
</html>