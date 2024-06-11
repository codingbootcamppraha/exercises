<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $movie->name }} ({{ $movie->year }})</h1>

    <h2>Directed by:</h2>
    <ul>
        @foreach ($people as $person)
            @if ($person->position_name == 'Directed by')
                <li>{{ $person->fullname }}</li>
            @endif
        @endforeach
    </ul>

    <h2>Writing credits:</h2>
    <ul>
        @foreach ($people as $person)
            @if ($person->position_name == 'Writing credits')
                <li>{{ $person->fullname }}</li>
            @endif
        @endforeach
    </ul>

    <h2>Produced by:</h2>
    <ul>
        @foreach ($people as $person)
            @if ($person->position_name == 'Produced by')
                <li>{{ $person->fullname }}</li>
            @endif
        @endforeach
    </ul>

    <h2>Original Music by:</h2>
    <ul>
        @foreach ($people as $person)
            @if ($person->position_name == 'Original Music by')
                <li>{{ $person->fullname }}</li>
            @endif
        @endforeach
    </ul>
    
    <h2>Cinematography by:</h2>
    <ul>
        @foreach ($people as $person)
            @if ($person->position_name == 'Cinematography by')
                <li>{{ $person->fullname }}</li>
            @endif
        @endforeach
    </ul>

    <h2>Cast:</h2>
    <ul>
        @foreach ($people as $person)
            @if ($person->position_name == ' Cast')
                <li>{{ $person->fullname }}</li>
            @endif
        @endforeach
    </ul>

</body>
</html>