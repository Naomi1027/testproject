<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stocks')->truncate(); //2回目実行の時シーダー情報をクリア
        DB::table('stocks')->insert([
            'name' => 'スマホケース',
            'explain' => 'iPhone14用iFace',
            'fee' => 1000,
            'imagePath' => 'iFace.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '財布',
            'explain' => 'Mary Quant 箱付き',
            'fee' => 3000,
            'imagePath' => 'MaryQuant.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'サロペット',
            'explain' => 'Smithのデニムサロペット',
            'fee' => 1500,
            'imagePath' => 'smith.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'バッグ',
            'explain' => 'anelloのリュック',
            'fee' => 2000,
            'imagePath' => 'bag.jpg',
        ]);
 
 
        DB::table('stocks')->insert([
            'name' => 'パーカー',
            'explain' => '黒のTe Chichiのパーカー',
            'fee' => 2000,
            'imagePath' => 'hoodie.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'ズボン',
            'explain' => 'Lugnoncureのチェック柄',
            'fee' => 1500,
            'imagePath' => 'pants.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'ロングTシャツ',
            'explain' => 'Lugnoncureの白いロングTシャツ',
            'fee' => 800,
            'imagePath' => 'longt.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'スカート',
            'explain' => 'Lugnoncureのデニムスカート',
            'fee' => 1200,
            'imagePath' => 'skart.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'ジャケット',
            'explain' => 'Lugnoncureのカーキ色',
            'fee' => 2200,
            'imagePath' => 'jacket.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'ビーニー',
            'explain' => 'ZARAのグリーン色',
            'fee' => 500,
            'imagePath' => 'benie.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'コート',
            'explain' => 'ベージュ色のサマンサモスモスのコート',
            'fee' => 5000,
            'imagePath' => 'coat.jpg',
        ]);

   }
}
