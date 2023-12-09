<x-app-layout>
    <h1>アニメカテゴリー追加画面</h1>
        <form action="/category/store" method="POST">
            @csrf
                <div class="Category">
                    <h2>現在のカテゴリー</h2>
                    @foreach ($allCategories as $originals)
                        <h2>{{ $loop->iteration }}:{{ $originals->category_name }}</h2>
                    @endforeach
                    <h2 style="color:red">新規カテゴリー名</h2>
                    <input type="text" size="30" name="category_name" placeholder="カテゴリー名" value=""/>
                </div>
            <input type="submit" value="アニメジャンルを登録する">
        </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>