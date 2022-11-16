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
        // 广告表
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('parent_id')->default(0)->comment('类型：0广告位，1广告内容');
            $table->string('name')->comment('标题');
            $table->string('description')->comment('描述');
            $table->unsignedInteger('width')->comment('广告宽度');
            $table->unsignedInteger('height')->comment('广告高度');
            $table->string('link')->comment('链接地址');
            $table->string('code')->comment('广告内容');
            $table->dateTime('start_time')->comment('开始时间');
            $table->dateTime('end_time')->comment('开始时间');
            $table->unsignedInteger('click_count')->default(0)->comment('点击量');
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
        Schema::dropIfExists('ads');
    }
};
