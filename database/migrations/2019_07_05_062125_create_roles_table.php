<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->Increments('id')->comment('功能菜单表');
            $table->string('name')->comment("模块名称");
            $table->string('class')->nullable()->comment("CLASS");
            $table->string('url')->nullable()->default("#")->comment('url');
            $table->string('icon')->nullable()->comment('图标');
            $table->tinyInteger('level')->comment("级别");
            $table->integer('p_id')->nullable()->comment('p_id');
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
}
