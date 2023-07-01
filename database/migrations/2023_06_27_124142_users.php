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
            $table->string('nickname')->unique()->comment('昵称');
            $table->string('phone', 11)->unique()->comment('手机号');
            $table->string('email')->unique()->comment('邮箱');
            $table->string('password')->comment('密码');
            $table->string('avatar')->default('')->comment('头像');

            $table->string('id_card_front')->default('')->comment('身份证国徽面');
            $table->string('id_card_opposite')->default('')->comment('身份证人像面');

            $table->string('full_name')->default('')->comment('真实姓名');
            $table->string('id_card')->unique()->default('')->comment('身份证号');




            $table->rememberToken();
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
        Schema::dropIfExists('users');

    }
};
