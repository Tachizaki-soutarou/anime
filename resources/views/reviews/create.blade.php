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
                    <input type="number" name="review[star]" class="block w-full sm:w-2/3 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" placeholder="星の数" value="{{ old('review.star') }}"/>
                </div>
                <div class="mb-4">
                    <p class="font-semibold">口コミタイトル</p>
                    @if ($errors->any())
                    <p class="comment__error" style="color:red">2文字以上、25文字以内で口コミをお願いいたします</p>
                    @endif
                    <input type="text" size="30" name="review[comment_title]" class="block w-full sm:w-2/3 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" placeholder="口コミタイトル" value="{{ old('review.comment_title') }}"/>
                </div>
                <div class="mb-4">
                    <p class="font-semibold">口コミ内容</p>
                    @if ($errors->any())
                    <p class="comment__error" style="color:red">2文字以上、200文字以内で口コミをお願いいたします</p>
                    @endif
                    <textarea rows="10" cols="40" name="review[comment]" class="block w-full sm:w-2/3 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white" placeholder="口コミを投稿する">{{ old('review.comment') }}</textarea>
                </div>
            <input type="submit" class="bg-indigo-600 text-white px-6 py-1 rounded-lg transform transition hover:scale-105 hover:bg-indigo-700 shadow-lg" value="口コミを投稿する">
        </form>
        <div class="footer">
            <a href="/animes/{{ $anime->id }}" class="text-indigo-600 hover:underline">戻る</a>
        </div>
    </div>
    </div>
</x-app-layout>