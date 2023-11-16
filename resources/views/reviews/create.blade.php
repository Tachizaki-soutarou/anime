<x-app-layout>
    <h1>{{ $anime->title }}</h1>
    <form action="/animes/{{ $anime->id }}/create_review" method="POST">
        @csrf
            <div class="title">
                <h2>星の数</h2>
                @if ($errors->any())
                <p class="star__error" style="color:red">正しい値を入力してください</p>
                <p class="star__error" style="color:red">1～5の数字で評価をお願いいたします</p>
                @endif
                <input type="number" name="review[star]" placeholder="星の数" value="{{ old('review.star') }}"/>
            </div>
            <div class="body">
                <h2>口コミ内容</h2>
                @if ($errors->any())
                <p class="comment__error" style="color:red">正しい値を入力してください</p>
                <p class="comment__error" style="color:red">2文字以上、200文字以内で口コミをお願いいたします</p>
                @endif
                <textarea name="review[comment]" placeholder="口コミを投稿する">{{ old('review.comment') }}</textarea>
            </div>
        <input type="submit" value="レビューを投稿する">
    </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>