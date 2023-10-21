<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anime</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $anime->title }}
        </h1>
        <div class="content">
            <div>ジャンル：{{$anime->category_name}}</div>
            <div class="anime_broadcast_start_date">
                <p>第1期：{{ $anime->first_broadcast_start_date->format('Y/m/d') }}</p>
                <p>第2期：{{ $anime->second_broadcast_start_date->format('Y/m/d')}}</p>
            </div>
            <div class="anime_synopsis">
                <h3>あらすじ</h3>
                <p>{!! nl2br(e($anime->synopsis)) !!}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>