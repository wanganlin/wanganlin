<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique()->comment('用户名');
            $table->string('password')->comment('登录密码');
            $table->string('name')->comment('昵称');
            $table->string('avatar')->comment('头像');
            $table->date('birthday')->comment('生日');
            $table->string('intro', 1000)->comment('简介');
            $table->string('mobile')->comment('手机号');
            $table->timestamp('mobile_verified_at')->nullable()->comment('手机号认证时间');
            $table->string('email')->comment('邮箱');
            $table->timestamp('email_verified_at')->nullable()->comment('邮箱认证时间');
            $table->string('last_login_at')->comment('最后登录时间');
            $table->string('last_login_ip')->comment('最后登录IP');
            $table->rememberToken();
            $table->unsignedTinyInteger('status')->default(1)->comment('登录状态：1正常，0禁用');
            $table->timestamps();
            $table->softDeletes();
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
};
