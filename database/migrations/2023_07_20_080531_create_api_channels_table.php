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
        Schema::create('api_channels', function (Blueprint $table) {
            $table->id();
            $table->string('channel_title')->nullable(FALSE)->default('')->comment('渠道名称');
            $table->string('channel_name')->nullable(FALSE)->default('')->comment('渠道TAG');
            $table->integer('channel_type')->nullable(FALSE)->default(1)->comment('渠道类型【1外站请求本站，2本站请求外站】');
            $table->integer('status')->nullable(FALSE)->default(1)->comment('开启装【1开启 0关闭】');
            $table->text('encrypt_public_key')->nullable(TRUE)->comment('公钥');
            $table->text('encrypt_private_key')->nullable(TRUE)->comment('私钥');
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
        Schema::dropIfExists('api_channels');
    }
};
