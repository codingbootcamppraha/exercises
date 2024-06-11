<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Genres:</h1>
    @foreach ($genres as $genre)
        <p>{{ $genre->name }}</p>
    @endforeach
</body>
</html>