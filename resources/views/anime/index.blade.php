<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Anime</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Anime Name</h1>
        <div class='posts'>
            @foreach ($animes as $anime)
                <div class='anime'>
                    <h2 class='title'>
                        <a href="/animes/{{ $anime->id }}">{{ $anime->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
    </body>
</html>