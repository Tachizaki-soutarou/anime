<x-app-layout>
    <h1>アニメ編集画面</h1>
    <form action="/update/{{ $anime->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <input type="file" name="image">
            <div class="title">
                <h2>アニメタイトル</h2>
                <input type="text" size="60" name="anime[title]" placeholder="タイトル" value="{{ $anime->title }}"/>
            </div>
            <div class="Hiragana_title">
                <h2>アニメひらがなタイトル</h2>
                <input type="text" size="60" name="anime[Hiragana_title]" placeholder="ひらがなタイトル" value="{{ $anime->Hiragana_title }}"/>
            </div>
            <div class="Latin_alphabet_title">
                <h2>アニメアルファベットタイトル</h2>
                <input type="text" size="60" name="anime[Latin_alphabet_title]" placeholder="アルファベットタイトル" value="{{ $anime->Latin_alphabet_title }}"/>
            </div>
            <div class="english_title">
                <h2>アニメ英語タイトル</h2>
                <input type="text" size="60" name="anime[english_title]" placeholder="英語タイトル" value="{{ $anime->english_title }}"/>
            </div>
            <div class="first_broadcast_start_date">
                <h2>第1期</h2>
                <input type="date" name="anime[first_broadcast_start_date]" placeholder="第1期" value="{{ $anime->first_broadcast_start_date->format('Y-m-d') }}"/>
            </div>
            <div class="second_broadcast_start_date">
                <h2>第2期</h2>
                <input type="date" name="anime[second_broadcast_start_date]" placeholder="第2期" value="{{ !empty($anime->second_broadcast_start_date) ? $anime->second_broadcast_start_date->format('Y-m-d') : "" }}"/>
            </div>
            <div class="third_broadcast_start_date">
                <h2>第3期</h2>
                <input type="date" name="anime[third_broadcast_start_date]" placeholder="第3期" value="{{ !empty($anime->third_broadcast_start_date) ? $anime->third_broadcast_start_date->format('Y-m-d') : "" }}"/>
            </div>
            <div class="fourth_broadcast_start_date">
                <h2>第4期</h2>
                <input type="date" name="anime[fourth_broadcast_start_date]" placeholder="第4期" value="{{ !empty($anime->fourth_broadcast_start_date) ? $anime->fourth_broadcast_start_date->format('Y-m-d') : "" }}"/>
            </div>
            <div class="first_movie">
                <h2>映画1</h2>
                <input type="text" size="60" name="anime[first_movie]" placeholder="映画1" value="{{ $anime->first_movie }}"/>
            </div>
            <div class="second_movie">
                <h2>映画2</h2>
                <input type="text" size="60" name="anime[second_movie]" placeholder="映画2" value="{{ $anime->second_movie }}"/>
            </div>
            <div class="third_movie">
                <h2>映画3</h2>
                <input type="text" size="60" name="anime[third_movie]" placeholder="映画3" value="{{ $anime->third_movie }}"/>
            </div>
            <div class="fourth_movie">
                <h2>映画4</h2>
                <input type="text" size="60" name="anime[fourth_movie]" placeholder="映画4" value="{{ $anime->fourth_movie }}"/>
            </div>
            <div class="synopsis">
                <h2>口コミ内容</h2>
                <textarea rows="10" cols="150" name="anime[synopsis]" placeholder="あらすじ">{{ $anime->synopsis }}</textarea>
            </div>
            <div class="categories">
                <h2>カテゴリー</h2>
                <select class="categories" name="anime_category[category_id][]">
                    @foreach ($dropDownCategories as $categories)
                        <option value="{{ $categories->id }}"
                            {{ (old('category_id', $anime->categories[0]->id ?? '') == $categories->id) ? 'selected' : '' }}>
                            {{ $categories->category_name }}
                        </option>
                    @endforeach
                </select>
                <select class="categories" name="anime_category[category_id][]">
                    @foreach ($dropDownCategories as $categories)
                        <option value="{{ $categories->id }}"
                            {{ (old('category_id', $anime->categories[1]->id ?? '') == $categories->id) ? 'selected' : '' }}>
                            {{ $categories->category_name }}
                        </option>
                    @endforeach
                </select>
                <select class="categories" name="anime_category[category_id][]">
                    @foreach ($dropDownCategories as $categories)
                        <option value="{{ $categories->id }}"
                            {{ (old('category_id', $anime->categories[2]->id ?? '') == $categories->id) ? 'selected' : '' }}>
                            {{ $categories->category_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="originals">
                <h2>原作</h2>
                <select class="originals" name="anime[original_id]">
                    @foreach ($dropDownOriginals as $originals)
                        <option value="{{ $originals->id }}"
                            {{ (old('original_id', $anime->original->id ?? '') == $originals->id) ? 'selected' : '' }}>
                            {{ $originals->original_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        <input type="submit" class="bg-indigo-600 text-white px-6 py-1 rounded-lg transform transition hover:scale-105 hover:bg-indigo-700 shadow-lg" value="アニメを編集する">
    </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>