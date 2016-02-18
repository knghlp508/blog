<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->string('name')->comment('分类名称');
            $table->string('parent_id')->default('0')->index('parent_id')->comment('父级ID，用-隔开');
            $table->tinyInteger('status')->default(1)->index('status')->comment('状态 -1-禁用，1-正常');
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
        Schema::drop('category');
    }
}
