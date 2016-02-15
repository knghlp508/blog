<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //创建用户表
            $table->increments('id')->comment('主键');
            $table->string('name')->comment('用户名');
            $table->char('pwd', 32)->default(md5(123456))->comment('密码，默认123456(MD5)');
            $table->string('nickname')->nullable()->comment('昵称');
            $table->string('email')->nullable()->comment('邮箱');
            $table->tinyInteger('status')->default(1)->index('status')->comment('状态，-2-删除，-1-禁用，1-正常');
            $table->dateTime('create_at')->comment('创建时间');
            $table->dateTime('update_at')->nullable()->comment('更新时间');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
