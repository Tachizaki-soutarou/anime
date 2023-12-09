<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 style="text-align:center; font-weight:bold; font-size:120%;">お気に入りアニメリスト</h1>
        <a href="/" class="text-indigo-600 hover:underline" style="text-align:center;">TOPへ戻る</a>
        <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10'>
            @forelse ($animes as $anime)
                <div class='bg-white shadow-lg rounded-lg overflow-hidden'>
                    <h2 class='text-2xl font-semibold text-gray-700 p-4'>
                        <a href="/animes/{{ $anime->id }}" class="hover:text-pink-600">{{ $anime->title }}</a>
                    </h2>
                    <span class="text-sm">🌟：{{ !empty($anime->averageRating()) ? floor($anime->averageRating() * 10) / 10 : "評価はまだありません"}}</span></br>
                    <span class="text-sm">💖：{{ $anime->favoriteCount() }} &emsp; </spam>
                    <span class="text-sm">💬：{{ $anime->reviewCount() }} </span>
                    <form action="/edit/{{ $anime->id }}" method="GET">
                        <button type="submit">アニメ編集ボタン</button>
                    </form>
                </div>
            @empty
                <p class="nullAnimes" style="text-align:center; font-weight:bold; font-size:120%; color:red;">お気に入りアニメはありません</p>
            @endforelse
            {{ $animes->links() }}
        </div>
    </div>
    <!-- javaScriptの記述 -->
    <script>
    
    </script>
</x-app-layout>