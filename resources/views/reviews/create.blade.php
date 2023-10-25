<x-app-layout>
    <h1>{{ $anime->title }}</h1>
    <form action="/animes/{{ $anime->id }}/create_review" method="POST">
        @csrf
        <div class="title">
            <h2>星の数</h2>
            <input type="number" name="review[star]" placeholder="星の数"/>
        </div>
        <div class="body">
            <h2>口コミ内容</h2>
            <textarea name="review[comment]" placeholder="口コミを投稿する"></textarea>
        </div>
        <input type="submit" value="レビューを投稿する">
    </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>