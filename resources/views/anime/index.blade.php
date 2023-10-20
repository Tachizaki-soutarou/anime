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
                    <h2 class='title'>{{ $anime->title }}</h2>
                    <p class='synopsis'>{{ $anime->synopsis }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>