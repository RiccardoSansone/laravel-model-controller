<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-1 mt-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card mt-2 shadow text-center">
                        <h3>{{$movie->title}}</h3>
                        <h4>{{$movie->original_title}}</h4>
                        <p>{{$movie->nationality}}</p>
                        <small>{{$movie->date}}</small>
                        <small>{{$movie->vote}}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>