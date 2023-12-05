<x-app-layout>
    <h1>アニメ追加画面</h1>
        <form action="/anime/store" method="POST">
            @csrf
                <div class="title">
                    <h2>アニメタイトル</h2>
                    <input type="text" size="60" name="anime[title]" placeholder="タイトル" value="{{ old('anime.title') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('anime.title') }}</p>
                </div>
                <div class="Hiragana_title">
                    <h2>アニメひらがなタイトル</h2>
                    <input type="text" size="60" name="anime[Hiragana_title]" placeholder="ひらがなタイトル" value="{{ old('anime.Hiragana_title') }}"/>
                </div>
                <div class="Latin_alphabet_title">
                    <h2>アニメアルファベットタイトル</h2>
                    <input type="text" size="60" name="anime[Latin_alphabet_title]" placeholder="アルファベットタイトル" value="{{ old('anime.Latin_alphabet_title') }}"/>
                </div>
                <div class="first_broadcast_start_date">
                    <h2>第1期</h2>
                    <input type="date" name="anime[first_broadcast_start_date]" placeholder="第1期" value="{{ old('anime.first_broadcast_start_date') }}"/>
                </div>
                <div class="second_broadcast_start_date">
                    <h2>第2期</h2>
                    <input type="date" name="anime[second_broadcast_start_date]" placeholder="第2期" value="{{ old('anime.second_broadcast_start_date') }}"/>
                </div>
                <div class="third_broadcast_start_date">
                    <h2>第3期</h2>
                    <input type="date" name="anime[third_broadcast_start_date]" placeholder="第3期" value="{{ old('anime.third_broadcast_start_date') }}"/>
                </div>
                <div class="fourth_broadcast_start_date">
                    <h2>第4期</h2>
                    <input type="date" name="anime[fourth_broadcast_start_date]" placeholder="第4期" value="{{ old('anime.fourth_broadcast_start_date') }}"/>
                </div>
                <div class="first_movie">
                    <h2>映画1</h2>
                    <input type="text" size="60" name="anime[first_movie]" placeholder="映画1" value="{{ old('anime.first_movie') }}"/>
                </div>
                <div class="second_movie">
                    <h2>映画2</h2>
                    <input type="text" size="60" name="anime[second_movie]" placeholder="映画2" value="{{ old('anime.second_movie') }}"/>
                </div>
                <div class="third_movie">
                    <h2>映画3</h2>
                    <input type="text" size="60" name="anime[third_movie]" placeholder="映画3" value="{{ old('anime.third_movie') }}"/>
                </div>
                <div class="fourth_movie">
                    <h2>映画4</h2>
                    <input type="text" size="60" name="anime[fourth_movie]" placeholder="映画4" value="{{ old('anime.fourth_movie') }}"/>
                </div>
                <div class="synopsis">
                    <h2>口コミ内容</h2>
                    <textarea rows="10" cols="150" name="anime[synopsis]" placeholder="あらすじ" {{ old('anime.synopsis') }}></textarea>
                </div>
                <div class="categories">
                    <h2>カテゴリー</h2>
                    <select style="width: 250px" name="anime_category[category_id][]">
                        @foreach ($dropDownCategories as $categories)
                            <option value="{{ $categories->id }}">
                                {{ $categories->category_name }}
                            </option>
                        @endforeach
                    </select>
                    <select style="width: 250px" name="anime_category[category_id][]">
                        @foreach ($dropDownCategories as $categories)
                            <option value="{{ $categories->id }}">
                                {{ $categories->category_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="originals">
                    <h2>原作</h2>
                    <select class="originals" name="anime[original_id]">
                        @foreach ($dropDownOriginals as $originals)
                            <option value="{{ $originals->id }}">
                                {{ $originals->original_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            <input type="submit" value="アニメを登録する">
        </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
    
    <sprict>
        {{-- $("select2html").select2({
          placeholder: "カテゴリー選択",
        multiple: true,
        allowClear: true,
        maximumSelectionLength: 2,
        closeOnSelect: false,
        language: 'ja'
        });
        
        var first = "";
        $(".pref-select").val(first).trigger("change"); --}}
    </sprict>
    
</x-app-layout>