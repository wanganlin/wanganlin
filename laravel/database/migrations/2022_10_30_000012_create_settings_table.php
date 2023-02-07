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
        // 配置表
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->index()->comment('父节点id');
            $table->string('code')->unique()->comment('配置code');
            $table->string('type')->comment('配置类型：text、select、file、hidden等');
            $table->string('range')->comment('配置数组索引');
            $table->string('value')->comment('该项配置的值');
            $table->tinyInteger('sort')->comment('排序');
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
        Schema::dropIfExists('settings');
    }
};
