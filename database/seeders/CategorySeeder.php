<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                [
                    'category_name' => 'ファンタジー'
                ],
                [
                    'category_name' => 'ダークファンタジー'
                ],
                [
                    'category_name' => 'アクション'
                ],
                [
                    'category_name' => 'コメディ'
                ],
                [
                    'category_name' => 'ドラマ'
                ]
         ]);
    }
}
