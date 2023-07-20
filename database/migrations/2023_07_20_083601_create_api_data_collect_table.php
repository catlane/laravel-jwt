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
        Schema::create('api_data_collect', function (Blueprint $table) {
            $table->id();
            $table->integer('channel_id')->nullable(FALSE)->default(0)->comment('渠道ID');
            $table->string('name')->nullable(FALSE)->default('')->comment('姓名');
            $table->string('mobile')->nullable(FALSE)->default('')->comment('手机号');
            $table->decimal('price')->nullable(FALSE)->default(0)->comment('贷款金额');

            $table->tinyInteger('house')->nullable(FALSE)->default(0)->comment('房子【1有 0 没有】');
            $table->tinyInteger('car')->nullable(FALSE)->default(0)->comment('车【1有 0 没有】');
            $table->tinyInteger('insurance')->nullable(FALSE)->default(0)->comment('保单【1有 0 没有】');
            $table->tinyInteger('fund')->nullable(FALSE)->default(0)->comment('公积金【1有 0 没有】');
            $table->tinyInteger('socital')->nullable(FALSE)->default(0)->comment('社保【1有 0 没有】');
            $table->tinyInteger('credit_card')->nullable(FALSE)->default(0)->comment('信用卡【1有 0 没有】');
            $table->tinyInteger('wld')->nullable(FALSE)->default(0)->comment('微粒贷【1有 0 没有】');
            $table->tinyInteger('qyns')->nullable(FALSE)->default(0)->comment('企业纳税【1有 0 没有】');
            $table->tinyInteger('df')->nullable(FALSE)->default(0)->comment('代发工资【1有 0 没有】');
            $table->tinyInteger('business_license')->nullable(FALSE)->default(0)->comment('营业执照【1有 0 没有】');
            $table->string('city')->nullable(FALSE)->default(0)->comment('城市');
            $table->tinyInteger('age')->nullable(FALSE)->default(0)->comment('年龄');
            $table->integer('loan_periods')->nullable(FALSE)->default(0)->comment('贷款期限');

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
        Schema::dropIfExists('api_data_collect');
    }
};
