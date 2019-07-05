<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id')->comment("用户表");
            $table->string('user_name')->comment("用户名");
            $table->string('phone')->comment("手机号");
            $table->string("account")->comment("账号");
            $table->string("password")->comment("密码");
            $table->string("address")->nullable()->comment("住址");
            $table->dateTime("birthday")->nullable()->comment("生日");
            $table->dateTime("join_date")->nullable()->comment("入职日期");
            $table->dateTime("leave_date")->nullable()->comment("离职日期");
            $table->boolean("leave_flag")->nullable()->default(0)->comment("在职状态 0 在职 1离职");
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
