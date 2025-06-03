<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games List</title>
</head>
<body>
    <h1>Games List</h1>
    <ul>
        @foreach ($games as $game)
            <li>
                <a href="{{ route('games.show', $game['id']) }}">{{ $game['title'] }}</a>
                <br>
                <strong>Developer:</strong> {{ $game['developer'] }}<br>
                <strong>Genre:</strong> {{ $game['genre'] }}<br>
                <strong>Price:</strong> ${{ $game['price'] }}<br>
            </li>
        @endforeach
    </ul>
</body>
</html>