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
        // 内容模型表
        Schema::create('patterns', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('模型名称');
            $table->string('intro')->comment('模型描述');
            $table->text('fields')->comment('模型附加字段');
            $table->unsignedTinyInteger('system')->comment('系统模型:1是，0否');
            $table->unsignedTinyInteger('status')->comment('状态:1正常，0不正常');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patterns');
    }
};
