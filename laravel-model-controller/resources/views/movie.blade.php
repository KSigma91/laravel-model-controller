<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel Model Controller</title>
</head>
<body style="background: #1e2d3b">
    <ul style="display: flex; gap: 30px">
        @foreach ($movies as $movie)
            <li style="list-style-type: none; text-align: center; color: #ffffff">
                <h2 style="color: #f9faf9; text-decoration: underline">
                    Title
                </h2>
                <big>
                    {{ $movie->title }} - {{ $movie->original_title }}
                </big><br>

                <small>
                    {{ $movie->nationality }}
                </small><br>

                <h2 style="color: #f9faf9; text-decoration: underline">
                    Release
                </h2>
                <big>
                    {{ $movie->date }}
                </big>

                <h3 style="text-decoration: underline">
                    Vote
                </h3>
                <big style="color: #a4a4a4; font-style: italic">
                    {{ $movie->vote }}
                </big><br>
            </li>
        @endforeach
    </ul>
</body>
</html>
