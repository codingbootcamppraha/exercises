<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/search">
        <input type="text" name="search">
        <button>Search</button>
    </form>

    <h2>Movies list:</h2>
    <ul>
        @foreach ($movies as $movie)            {{-- same as <?php foreach ($movies as $movie) : ?> --}}
            <li>{{ $movie->name }}</li>         {{-- same as <?= $movie->name ?> --}}
        @endforeach                             {{-- same as <?php endforeach ?> --}}
    </ul>
</body>
</html>