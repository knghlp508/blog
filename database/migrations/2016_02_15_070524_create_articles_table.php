<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            //创建文章表
            $table->increments('id')->comment('主键');
            $table->string('title')->comment('标题');
            $table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
            $table->string('thumb')->nullable()->comment('缩略图');
            $table->tinyInteger('status')->default(1)->index('status')->comment('状态，-2-回收站，-1-禁用，1-正常');
            $table->dateTime('create_at')->comment('创建时间');
            $table->dateTime('update_at')->nullable()->comment('更新时间');
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
