<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-wrap justify-between items-center mb-6">
            <!-- 検索フォーム -->
            <form action="/" method="GET" class="flex flex-wrap gap-4 items-center w-full">
                <!-- カテゴリー -->
                <div class="flex-grow">
                    <label for="category" class="font-semibold text-gray-700">カテゴリー</label>
                    <select class="form-select block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="category_id">
                        <option value="">指定なし</option>
                        @foreach ($dropDownCategories as $category)
                            <option value="{{ $category->id }}" {{ (old('category_id', $category_id ?? '') == $category->id) ? 'selected' : '' }}>
                                {{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <!-- 原作 -->
                <div class="flex-grow">
                    <label for="original" class="font-semibold text-gray-700">原作</label>
                    <select class="form-select block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="original_id">
                        <option value="">指定なし</option>
                        @foreach ($dropDownOriginals as $original)
                            <option value="{{ $original->id }}" {{ (old('original_id', $original_id ?? '') == $original->id) ? 'selected' : '' }}>
                                {{ $original->original_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <!-- タイトル -->
                <div class="w-1/4">
                    <label for="animesWord" class="font-semibold text-gray-700">タイトル</label>
                    <input type="text" class="form-input block w-full rounded-md border-gray-300 shadow-sm" name="animesWord" value="{{ old('animesWord', $animesWord ?? '') }}">
                </div>
                <!-- 検索ボタン -->
                <div class="flex justify-end mt-4">
                    <button type="submit" class="px-6 py-3 bg-pink-500 text-white font-bold rounded-full hover:bg-pink-600 focus:outline-none focus:bg-pink-700">検索</button>
                </div>
                <!-- 並び替え -->
                <div class="md:w-auto text-right">
                    <label for="orderByControl" class="font-semibold text-gray-700">並び替え</label>
                    <select name="orderByControl" class="form-select block w-full md:w-auto rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" onchange="this.form.submit()">
                        <option value="">指定なし</option>
                        <option value="1">星の数順</option>
                        <option value="2">放送開始日古い順</option>
                        <option value="3">放送開始日新しい順</option>
                        <option value="4">50音順</option>
                    </select>
                </div>
            </form>
        </div>

        <!-- アニメ一覧表示 -->
        <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6'>
            @forelse ($animes as $anime)
                <div class='bg-white shadow-lg rounded-lg overflow-hidden'>
                    <h2 class='text-2xl font-semibold text-gray-700 p-4'>
                        <a href="/animes/{{ $anime->id }}" class="hover:text-pink-600">{{ $anime->title }}</a>
                    </h2>
                    <div class="p-4">
                        <span class="text-sm"><i class="fa-solid fa-thumbs-up"></i>：{{ $anime->reviews_avg_star ?? '評価なし' }}</span><br>
                        <span class="text-sm">💖：{{ $anime->favored_by_users_count }}</span>
                        <span class="text-sm">💬：{{ $anime->reviews_count }}</span>
                    </div>
                    @can('register')
                        <div class="px-4 py-2">
                            <a href="/edit/{{ $anime->id }}" class="text-indigo-600 hover:text-indigo-800">アニメ編集</a>
                        </div>
                    @endcan
                </div>
            @empty
                <p class="nullAnimes w-full text-center font-bold text-lg text-red-500">該当するアニメはありません！</p>
            @endforelse
        </div>

        <!-- ページネーション -->
        {{$animes->appends(request()->query())->links()}}
    </div>
    <!-- javaScriptの記述 -->
    <script>
        // orderByControlのセレクトボックスを取得
        const orderByControl = document.querySelector('select[name="orderByControl"]');
        // セレクトボックスの値が変更されたときのイベントリスナーを追加
        orderByControl.addEventListener('change', function() {
            // 現在のフォームを取得
            const form = this.closest('form');
            console.log(form);
            // フォームを送信
            form.submit();
        });
    </script>
</x-app-layout>