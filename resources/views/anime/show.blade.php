<x-app-layout>
    <div class="max-w-4xl mx-auto p-4 md:p-8">
        <h1 class="text-3xl font-bold mb-6">
            {{ $anime->title }}
        </h1>
        <div class="content mb-8">
            <div class="mb-4 text-xl">
                ジャンル：{{$anime->category->category_name}}
            </div>
            <div class="anime_broadcast_start_date mb-4">
                <p class="font-semibold">放送開始日</p>
                <p class="ml-4">第1期：{{ $anime->first_broadcast_start_date->format('Y/m/d') }}</p>
                <p class="ml-4">第2期：{{ $anime->second_broadcast_start_date->format('Y/m/d')}}</p>
            </div>
            <div class="anime_synopsis mb-4">
                <h3 class="text-2xl font-semibold mb-2">あらすじ</h3>
                <p class="text-gray-700 leading-relaxed">{!! nl2br(e($anime->synopsis)) !!}</p>
            </div>
        </div>
        <div class="create_anime mb-6 text-center">
            <a href='/animes/{{ $anime->id }}/create' class="bg-indigo-600 text-black px-6 py-2 rounded-lg transform transition hover:scale-105 hover:bg-indigo-700 shadow-lg">
                口コミを投稿してみませんか？
            </a>
        </div>
        <hr class="mb-8">
        <div class="reviews">
            @foreach ($reviews as $review)
                <div class='anime_reviews bg-gray-100 p-4 rounded mb-4'>
                     <h2 class='star text-xl font-semibold mb-2'>星の数：{{$review->star}}</h2>
                     <p class="text-gray-700">{{ $review->comment }}</p>
                 </div>
            @endforeach
        </div>
        <div class="footer mb-8 mt-4">
            <a href="/" class="text-indigo-600 hover:underline">戻る</a>
        </div>
    </div>
</x-app-layout>