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
        // 权限表
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('parent_id')->comment('父级ID');
            $table->string('name')->comment('规则名称');
            $table->string('path')->comment('规则标识')->unique();
            $table->string('icon')->comment('ICON图标');
            $table->unsignedTinyInteger('menu')->comment('是否为管理菜单：1是，0否');
            $table->unsignedTinyInteger('type')->comment('验证类型');
            $table->unsignedTinyInteger('status')->comment('状态：为1正常，为0禁用');
            $table->string('condition')->comment('规则表达式，为空表示存在就验证，不为空表示按照条件验证');
            $table->unsignedInteger('sort')->comment('菜单排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
};
