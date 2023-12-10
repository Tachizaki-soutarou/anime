<x-app-layout>
    <div class="max-w-4xl mx-auto p-4 md:p-8">
        <p class="text-4xl font-bold">{{ $anime->title }}</p>
        <p class="text-xs mb-6">{{ $anime->english_title }}</p>
        <div class="content mb-8">
            <div class="mb-4 text-xl">
                <h1>総評価：{{ !empty($star_average) ? $star_average : "評価はまだありません" }}</h1>
            </div>
            <div class="mb-4">
                <p class="font-semibold">カテゴリー</p>
                <ul class="ml-4">
                    @foreach ($anime->categories as $category)
                        <li> {{ $category->category_name }} </li>
                    @endforeach
                </ul>
            </div>
            <div class="mb-4">
                <p class="font-semibold">原作</p>
                <p class="ml-4">{{ $anime->original->original_name }}</p>
            </div>
            <div class="anime_broadcast_start_date mb-4">
                <p class="font-semibold">放送開始日</p>
                <p class="ml-4">第1期：{{ $anime->first_broadcast_start_date->format('Y/m/d') }}</p>
                <p class="ml-4">{{ !empty($anime->second_broadcast_start_date) ? "第2期：" . $anime->second_broadcast_start_date->format('Y/m/d') : "" }}</p>
                <p class="ml-4">{{ !empty($anime->third_broadcast_start_date) ? "第3期：" . $anime->third_broadcast_start_date->format('Y/m/d') : "" }}</p>
                <p class="ml-4">{{ !empty($anime->fourth_broadcast_start_date) ? "第4期：" . $anime->fourth_broadcast_start_date->format('Y/m/d') : "" }}</p>
            </div>
            <div class="anime_movie mb-4">
                <p class="font-semibold">{{ !empty($anime->first_movie) ? "映画" : "" }}</p>
                <p class="ml-4">{{ !empty($anime->first_movie) ? $anime->first_movie : "" }}</p>
                <p class="ml-4">{{ !empty($anime->second_movie) ? $anime->second_movie : "" }}</p>
                <p class="ml-4">{{ !empty($anime->third_movie) ? $anime->third_movie : "" }}</p>
                <p class="ml-4">{{ !empty($anime->fourth_movie) ? $anime->fourth_movie : "" }}</p>
                </br>
                <p class="text-xs">{{ !empty($anime->first_movie) ? "※実写版、総集編は対象ではありません" : "" }}</p>
            </div>
            <div class="anime_synopsis mb-4">
                <h3 class="text-2xl font-semibold mb-2">あらすじ</h3>
                <p id="animeSynopsis" class="text-gray-700 leading-relaxed">{!! nl2br(e($anime->synopsis)) !!}</p>
                <button id="synopsisBtn" onclick="clickSynopsisBtn()">あらすじを表示する</button>
            </div>
        </div>
        <div>
            <form action="/animes/{{ $anime->id }}/favorite" method="POST">
            @csrf
                @if($favoriteFlg)
                    <button type="submit" name="favoriteAnimeId" value="{{ $anime->id }}" onclick="fovoriteDestroy()">お気に入り：💖</button>
                @else
                    <button type="submit" name="favoriteAnimeId" value="{{ $anime->id }}" onclick="fovoriteCreate()">お気に入り：💙</button>
                @endif
            </form>
        </div>
        <div class="footer mb-8 mt-4">
            <a href="/" class="text-indigo-600 hover:underline">戻る</a>
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
                    <p>{{ $review->user->nick_name }} さんの口コミ</p>
                    <span class='text-xl font-semibold mb-2'>星 {{$review->star}}</span>
                    <span class='text-xl font-semibold mb-2'>：{{ $review->comment_title }}</span></br>
                    <p id="animeReviewComment_{{ $review->id }}" class="text-gray-700" style="display: none;">{{ $review->comment }}</p>
                    <button onclick="clickReviewCommentBtn({{ $review->id }})">コメントを表示/非表示</button>
                    @hasanyrole('admin')
                        <form action="/delete/{{ $anime->id }}/{{ $review->id }}" method="POST">
                            @csrf
                            <button type="submit" onclick="commentDeleteBtnId()">口コミ削除ボタン</button>
                        </form>
                    @endhasanyrole
                </div>
            @endforeach
        </div>
    </div>
    <!-- javaScriptの記述 -->
    <script>
        document.getElementById("animeSynopsis").style.display ="none";
        function clickSynopsisBtn(){
        	const animeSynopsisId = document.getElementById("animeSynopsis");
        	const synopsisBtnId = document.getElementById("synopsisBtn");
        
        	if(animeSynopsisId.style.display === "block"){
        		// noneで非表示
        		animeSynopsisId.style.display ="none";
        		synopsisBtnId.innerText = "あらすじを表示する";
        		
        	}else{
        		// blockで表示
        		animeSynopsisId.style.display ="block";
        		synopsisBtnId.innerText = "あらすじを非表示にする";
        	}
        }
        
        function commentDeleteBtnId(){
            window.confirm("本当に削除しますか？");
        }
    
        function clickReviewCommentBtn($review_id){
        	const ReviewCommentId = document.getElementById("animeReviewComment_" + $review_id);
        
        	if(ReviewCommentId.style.display === "block"){
        		// noneで非表示
        		ReviewCommentId.style.display ="none";
        		
        	}else{
        		// blockで表示
        		ReviewCommentId.style.display ="block";
        	}
        }
    </script>
</x-app-layout>