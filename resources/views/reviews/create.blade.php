<x-app-layout>
    <div class="max-w-4xl mx-auto p-4 md:p-8">
        <div style="display: flex; gap:5px;">
            @if($anime->image != null)
                <img src="{{ asset('images/'.$anime->image) }}" style="width: 70px; height: 70px; object-fit: cover;">
            @else
                <img src="{{ asset('images/noimage.jpg') }}" style="width: 70px; height: 70px; object-fit: cover;">
            @endif
        </div>
        <p class="text-4xl font-bold">{{ $anime->title }}</p>
        <p class="text-xs mb-6">{{ $anime->english_title }}</p>
        <form action="/animes/{{ $anime->id }}/create_review" method="POST">
            @csrf
                <div class="mb-4">
                    <p class="font-semibold">星の数</p>
                    @if ($errors->any())
                    <p class="star__error" style="color:red">1～5の数字で評価をお願いいたします</p>
                    @endif
                    <input type="number" name="review[star]" placeholder="星の数" value="{{ old('review.star') }}"/>
                </div>
                <div class="mb-4">
                    <p class="font-semibold">口コミタイトル</p>
                    @if ($errors->any())
                    <p class="comment__error" style="color:red">2文字以上、25文字以内で口コミをお願いいたします</p>
                    @endif
                    <input type="text" size="30" name="review[comment_title]" placeholder="口コミタイトル" value="{{ old('review.comment_title') }}"/>
                </div>
                <div class="mb-4">
                    <p class="font-semibold">口コミ内容</p>
                    @if ($errors->any())
                    <p class="comment__error" style="color:red">2文字以上、200文字以内で口コミをお願いいたします</p>
                    @endif
                    <textarea rows="10" cols="40" name="review[comment]" placeholder="口コミを投稿する">{{ old('review.comment') }}</textarea>
                </div>
            <input type="submit" class="shadow-lg px-2 py-1  bg-blue-400 text-lg text-white font-semibold rounded  hover:bg-blue-500 hover:shadow-sm hover:translate-y-0.5 transform transition" value="口コミを投稿する">
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </div>
    </div>
</x-app-layout>