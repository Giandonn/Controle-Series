<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>
<body>
    <h1>Séries</h1>

    <ul>
        @foreach($series as $s)
        <li>{{ $s }}</li>
        @endforeach
    </ul>
</body>
</html>