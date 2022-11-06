<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 内容表
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('标题');
            $table->string('keywords')->comment('关键词');
            $table->string('description')->comment('描述');
            $table->string('intro')->comment('简介');
            $table->text('content')->comment('内容');
            $table->unsignedTinyInteger('enabled')->default(1)->comment('状态：1正常，0禁用');
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
        Schema::dropIfExists('contents');
    }
};
