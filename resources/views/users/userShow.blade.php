<x-app-layout>
    <div class="container mx-auto px-4 py-6 text-center">
        <div class="text-4xl">
            マイページ
        </div>
        <div>
            <strong>姓 名</strong><br>
            <p>{{ $authUser->last_name }} {{$authUser->first_name}}</p>
            <strong>ニックネーム</strong><br>
            <p>{{ $authUser->nick_name }}</p>
            <strong>E-mailアドレス</strong><br>
            <p>{{ $authUser->email }}</p>
            <strong>性別</strong><br>
            <p>{{ $authUser->sex }}</p>
            <strong>年齢</strong><br>
            <p>{{ $authUser->age }}</p>
        </div>
        <div class="footer mb-8 mt-4">
            <a href="/" class="text-indigo-600 hover:text-indigo-800 font-semibold">-- TOP画面へ戻る --</a>
        </div>
    </div>
</x-app-layout>