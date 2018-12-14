<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnTimeDemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demo', function (Blueprint $table) {
            //
            $table->dropTimestamps();
            $table->unsignedInteger('create_time')->default('0')->comment('创建时间');
            $table->unsignedInteger('update_time')->default('0')->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demo', function (Blueprint $table) {
            //
            $table->dropColumn('create_time');
            $table->dropColumn('update_time');
            $table->timestamps();
        });
    }
}
