<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mine')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('mine')->insert([
            'name' => '元村',
            'age' => '43',
        ]);
 
        
    }
}
