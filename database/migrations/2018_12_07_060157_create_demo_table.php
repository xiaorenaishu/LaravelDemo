<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demo', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->engine = 'innodb';
            $table->increments('id');
            $table->string('name', 32)->default('')->comment('姓名');
            $table->string('remark', 3200)->default('')->comment('备注');
            $table->unsignedTinyInteger('status')->default('0')->comment('状态');
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
        Schema::dropIfExists('demo');
    }
}
