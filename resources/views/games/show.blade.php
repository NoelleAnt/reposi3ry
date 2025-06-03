<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $game['title'] }}</title>
</head>
<body>
    <h1>{{ $game['title'] }}</h1>
    <p><strong>Developer:</strong> {{ $game['developer'] }}</p>
    <p><strong>Publisher:</strong> {{ $game['publisher'] }}</p>
    <p><strong>Genre:</strong> {{ $game['genre'] }}</p>
    <p><strong>Release Date:</strong> {{ $game['releaseDate'] }}</p>
    <p><strong>Platform:</strong> {{ $game['platform'] }}</p>
    <p><strong>Price:</strong> ${{ $game['price'] }}</p>

    <a href="{{ url('/games') }}">Back to Game List</a>
</body>
</html>