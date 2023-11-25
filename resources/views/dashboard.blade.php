<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("アニメ口コミサイトへようこそ!") }}
                </div>
            </div>
            </br>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("使用上の注意") }}
                </br>
                    {{ __("当サイトを使用するにあたって禁止事項がございます。") }}
                </br>
                    {{ __("・アニメに対する口コミでの過度なネタバレ投稿") }}
                </br>
                    {{ __("・誹謗中傷、公序良俗違反に該当する不適切投稿") }}
                </br>
                    {{ __("・1度にアカウントを大量登録し、順位を書き換えるなどの不適切行為") }}
                </br>
                    {{ __("上記の違反等が発覚した場合、『投稿削除』『アカウント利用停止』などの措置を取らせていただきます。") }}
                </br>
                    {{ __("皆様が当サイトを楽しんで使用できるよう、ご協力お願いいたします。") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
