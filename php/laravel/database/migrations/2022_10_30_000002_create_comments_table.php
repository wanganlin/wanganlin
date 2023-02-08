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
        // 内容评论表
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('parent_id')->comment('评论的ID');
            $table->unsignedInteger('user_id')->comment('用户ID');
            $table->string('user_name')->comment('用户昵称');
            $table->unsignedInteger('content_id')->comment('内容ID');
            $table->string('comment', 1000)->comment('评论内容');
            $table->unsignedTinyInteger('rank')->comment('评论等级');
            $table->string('ip')->comment('IP地址');
            $table->unsignedTinyInteger('status')->default(1)->comment('状态：1正常，0禁用');
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
        Schema::dropIfExists('comments');
    }
};
