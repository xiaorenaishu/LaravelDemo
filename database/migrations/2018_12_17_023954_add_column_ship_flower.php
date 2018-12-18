<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnShipFlower extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flower', function (Blueprint $table) {
            //
            $table->unsignedTinyInteger('relation_ship')->default(0)->comment('插入记录ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flower', function (Blueprint $table) {
            //
            $table->dropColumn('relation_ship');
        });
    }
}
