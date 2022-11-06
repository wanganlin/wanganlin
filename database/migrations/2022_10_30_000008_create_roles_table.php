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
        // 角色表
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('角色名');
            $table->string('description')->comment('角色描述');
            $table->text('rules')->comment('角色拥有的规则id，多个规则","隔开');
            $table->unsignedTinyInteger('status')->comment('状态：1正常，0禁用');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
