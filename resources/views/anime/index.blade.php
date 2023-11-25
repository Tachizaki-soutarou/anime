<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="border-t border-gray-200 py-6">
            <form action="/" method="GET" class="flex flex-col items-center gap-4">
                <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                    <div class="categories_group text-center">
                        <label for="category" class="font-semibold text-gray-700 mb-2">カテゴリー</label>
                        <select class="categories_control form-select block w-60 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="category_id">
                            <option value="">指定なし</option>
                            @foreach ($dropDownCategories as $categories)
                                <option value="{{ $categories->id }}"
                                    {{ (old('category_id', $category_id ?? '') == $categories->id) ? 'selected' : '' }}>
                                    {{ $categories->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="originals_group text-center">
                        <label for="original" class="font-semibold text-gray-700 mb-2">原作</label>
                        <select class="originals_control form-select block w-60 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="original_id">
                            <option value="">指定なし</option>
                            @foreach ($dropDownOriginals as $originals)
                                <option value="{{ $originals->id }}" 
                                    {{ (old('original_id', $original_id ?? '') == $originals->id) ? 'selected' : '' }}>
                                    {{ $originals->original_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <label for="animesWord" class="font-semibold text-gray-700 mb-2">タイトル</label>        
                <input type="text" name="animesWord" value="{{ old('animesWord', $animesWord ?? '') }}">
                <label for="orderBy">並び替え</label>
                <select name="orderByControl" onclick="sortClick()">
                    <option value="">指定なし</option>
                    <option value="1">星の数順</option>
                    <option value="2">放送開始日古い順</option>
                    <option value="3">放送開始日新しい順</option>
                    <option value="4">50音順</option>
                </select>
                <button type="submit" class="mt-4 px-6 py-3 bg-pink-500 text-black font-bold rounded-full hover:bg-pink-600 focus:outline-none focus:bg-pink-700">検索</button>
            </form>
            <form action="/admin/create" method="GET">
                <button type="submit">アニメ追加ボタン</button>
            </form>
            <form action="/admin/edit" method="GET">
                <button type="submit">アニメ編集ボタン</button>
            </form>
        </div>
        <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10'>
            @forelse ($animes as $anime)
                <div class='bg-white shadow-lg rounded-lg overflow-hidden'>
                    <h2 class='text-2xl font-semibold text-gray-700 p-4'>
                        <a href="/animes/{{ $anime->id }}" class="hover:text-pink-600">{{ $anime->title }}</a>
                    </h2>
                    <span class="text-sm">🌟：{{ !empty($anime->reviews_avg_star) ? floor($anime->reviews_avg_star * 10) / 10 : "評価はまだありません"}}</span></br>
                    <span class="text-sm">💖：{{ $anime->favored_by_users_count }} &emsp; </spam>
                    <span class="text-sm">💬：{{ $anime->reviews_count }} </span>
                </div>
            @empty
                <p class="nullAnimes" style="text-align:center; font-weight:bold; font-size:120%; text-shadow:1px 1px 1px #666; color:red; padding:4px;">該当するアニメはありません！</p>
            @endforelse
            {{ $animes->links() }}
        </div>
    </div>
    <!-- javaScriptの記述 -->
    <script>
        // orderByControlのセレクトボックスを取得
        const orderByControl = document.querySelector('select[name="orderByControl"]');
        // セレクトボックスの値が変更されたときのイベントリスナーを追加
        orderByControl.addEventListener('change', function() {
            // 現在のフォームを取得
            const form = this.closest('form');
            // フォームを送信
            form.submit();
        });
    </script>
</x-app-layout>