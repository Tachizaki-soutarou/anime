<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">{{ $pageTitle }}</h1>
        <div class="border-t border-gray-200 py-6">
                <a href="users/mypage">ようこそ {{ Auth::user()->nick_name }} さん</a>
            <form action="/" method="GET" class="flex flex-col items-center gap-4">
                <input type="hidden" name="from_form" value="1">
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
                <button type="submit" name="BroadStartSortAsc" value="1">放送開始日古い順</button></br>
                <button type="submit" name="BroadStartSortDesc" value="2">放送開始日新しい順</button></br>
                <button type="submit" name="JapaneseOrderSort" value="3">50音順</button></br>
                <button type="submit" class="mt-4 px-6 py-3 bg-pink-500 text-black font-bold rounded-full hover:bg-pink-600 focus:outline-none focus:bg-pink-700">検索</button>
            </form>
        </div>
        <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10'>
            @forelse ($animes as $anime)
                <div class='bg-white shadow-lg rounded-lg overflow-hidden'>
                    <h2 class='text-2xl font-semibold text-gray-700 p-4'>
                        <span class="text-pink-500">{{ $pageTitleFlg ? $loop->iteration . '位：' : '' }}</span>
                        <a href="/animes/{{ $anime->id }}" class="hover:text-pink-600">{{ $anime->title }}</a>
                    </h2>
                </div>
            @empty
                <p class="nullAnimes" style="text-align:center; font-weight:bold; font-size:120%; text-shadow:1px 1px 1px #666; color:red; padding:4px;">該当するアニメはありません！</p>
            @endforelse
        </div>
        <div class="text-center mt-8">
            <a href="/" class="text-indigo-600 hover:text-indigo-800 font-semibold">-- TOP画面へ戻る --</a>
        </div>
    </div>
</x-app-layout>