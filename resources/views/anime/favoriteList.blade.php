<x-app-layout>
    <div>
        <div style="text-align:center;">
            <p style="font-weight:bold; font-size:120%;">お気に入りアニメリスト</p>
            <a href="/" class="text-indigo-600 hover:underline">TOPへ戻る</a>
        </div>
    </div>
    <div class="container mx-auto px-4 py-6">
        <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10'>
            @forelse ($animes as $anime)
                <div class='bg-white shadow-lg rounded-lg overflow-hidden'>
                    <p class='text-2xl font-semibold text-gray-700 p-4'>
                        @if($anime->image != null)
                            <img src="{{ asset('images/'.$anime->image) }}" style="width: 400px; height: 300px; object-fit: cover;">
                        @else
                            <img src="{{ asset('images/noimage.jpg') }}" style="width: 400px; height: 300px; object-fit: cover;">
                        @endif
                        <a href="/animes/{{ $anime->id }}" class="hover:text-pink-600">{{ $anime->title }}</a>
                    </p>
                    <p class="text-xs text-gray-500 px-4">カテゴリー：
                        @foreach ($anime->categories as $category)
                            <span class="px-1">{{ $category->category_name }}<span>
                        @endforeach
                    </p>
                    <p class="px-4">
                        <span class="text-sm"><i class="fas fa-star" style="color: orange;"></i>：{{ !empty($anime->averageRating()) ? floor($anime->averageRating() * 10) / 10 : "評価なし"}}</span>&emsp;
                        <span class="text-sm"><i class="fas fa-heart" style="color: red;"></i>：{{ $anime->favoriteCount() }}</spam>&emsp;
                        <span class="text-sm"><i class="far fa-comment"></i>：{{ $anime->reviewCount() }}</span>
                    </p>
                    @hasanyrole('admin')
                    <div class="px-4 py-2">
                        <a href="/edit/{{ $anime->id }}" class="text-indigo-600 hover:text-indigo-800">アニメ編集</a>
                    </div>
                    @endhasanyrole
                </div>
            @empty
        </div>
                <p class="nullAnimes" style="text-align:center; font-weight:bold; font-size:120%; color:red;">お気に入りアニメはありません</p>
            @endforelse
            {{ $animes->links() }}
    </div>
    <!-- javaScriptの記述 -->
    <script>
    
    </script>
</x-app-layout>