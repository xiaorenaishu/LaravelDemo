<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->engine = 'innodb';
            $table->collation = 'utf8mb4_general_ci';
            $table->charset = 'utf8mb4';
            $table->increments('id');
            $table->string('title', 32)->default('')->comment('优惠券标题');
            $table->string('label', 32)->default('')->comment('优惠券标签');
            $table->unsignedInteger('create_time')->default(0)->comment('创建时间');
            $table->unsignedInteger('operate_by')->default(0)->comment('最新操作人');
            $table->unsignedInteger('operate_time')->default(0)->comment('更新时间');
            $table->index(['create_time', 'operate_time'], 'idx_create_operate_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
