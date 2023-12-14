<x-app-layout>
    <h1>{{ $anime->title }}</h1>
    <form action="/update/{{ $anime->id }}/{{ $review->id }}" method="POST">
        @csrf
        @method('PUT')
            <div class="title">
                <h2>星の数</h2>
                @if ($errors->any())
                <p class="star__error" style="color:red">1～5の数字で評価をお願いいたします</p>
                @endif
                <input type="number" name="review[star]" placeholder="星の数" value="{{ $review->star }}"/>
            <div class="body">
            <div class="comment_title">
                <h2>口コミタイトル</h2>
                @if ($errors->any())
                <p class="comment__error" style="color:red">2文字以上、25文字以内で口コミをお願いいたします</p>
                @endif
                <input type="text" size="30" name="review[comment_title]" placeholder="口コミタイトル" value="{{ $review->comment_title }}"/>
            </div>
            <div class="comment">
                <h2>口コミ内容</h2>
                @if ($errors->any())
                <p class="comment__error" style="color:red">2文字以上、200文字以内で口コミをお願いいたします</p>
                @endif
                <textarea rows="10" cols="40" name="review[comment]" placeholder="口コミを投稿する">{{ $review->comment }}</textarea>
            </div>
            </div>
        <input type="submit" value="口コミを編集する">
    </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>