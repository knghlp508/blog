<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_content', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->integer('art_id')->unsigned()->index('art_id')->comment('文章ID');
            $table->text('content')->nullable()->comment('内容');
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
        Schema::dropIfExists('articles_content');
    }
}
