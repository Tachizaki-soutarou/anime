<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-slot name="header">
    </x-slot>
    <x-app-layout>
        <body>
            <p>ログインユーザー：{{Auth::user()->nick_name}}</p>
            <h1>アニメ一覧</h1>
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
    </x-app-layout>
</html>