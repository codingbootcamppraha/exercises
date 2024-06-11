<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>{{ $genre->name }} movies:</h2>
    <ul>
        @foreach ($movies as $movie)            
            <li>{{ $movie->name }}</li>         
        @endforeach                            
    </ul>
</body>
</html>