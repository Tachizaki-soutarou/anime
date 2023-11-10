<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-slot name="header">
    </x-slot>
    <x-app-layout>
        <body>
            <p>ログインユーザー：{{Auth::user()->nick_name}}</p>
            <h1>TOP アニメランキング</h1>
            <div class='posts'>
                @foreach ($animes as $anime)
                    <div class='anime'>
                        <h2 class='title'>
                            <span>{{ $loop->iteration }}位：</span><a href="/animes/{{ $anime->id }}">{{ $anime->title }}</a>
                        </h2>
                    </div>
                @endforeach
            </div>
            <div class="categories_group">
                <form action="/" method="GET">
                    <select class="categories_control" name="category_id">
                        @foreach ($dropDownCategories as $categories)
                            <option value="{{ $categories->id }}">{{ $categories->category_name }}</option>
                        @endforeach
                    </select>
                    <button type="submit">検索</button>
                </form>
            </div>
            <div class="originals_group">
                <form action="/" method="GET">
                    <select class="originals_control" name="original_id">
                        @foreach ($dropDownOriginals as $originals)
                            <option value="{{ $originals->id }}">{{ $originals->original_name }}</option>
                        @endforeach
                    </select>
                    <button type="submit">検索</button>
                </form>
            </div>
            <a href="/">-- TOP画面へ戻る --</a>
        </body>
    </x-app-layout>
</html>