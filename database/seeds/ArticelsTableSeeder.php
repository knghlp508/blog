<?php

use Illuminate\Database\Seeder;
use App\Model\Articles;

class ArticelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //填充文章表
        for ($i = 0; $i < 20; $i++) {
            Articles::create([
                'title' => '测试文章1' . $i,
                'user_id' => 1,
                'create_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
