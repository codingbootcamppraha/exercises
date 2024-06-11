<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>{{ $actor->fullname }}</h2>

    <h3>Movies:</h3>
    <ul>
        @foreach ($actor_movies as $movie)
            <li>
                {{ $movie->name }}
            </li>
        @endforeach
    </ul>
</body>
</html>