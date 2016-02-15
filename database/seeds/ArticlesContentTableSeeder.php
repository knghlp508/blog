<?php

use Illuminate\Database\Seeder;
use App\Model\ArticlesContent;

class ArticlesContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //填充文章内容表
        for ($i = 0; $i < 20; $i++) {
            ArticlesContent::create([
                'art_id' => $i + 1,
                'content' => '文章内容XXXXXXXX_' . $i . '_' . mt_rand(0, 99),
            ]);
        }
    }
}
