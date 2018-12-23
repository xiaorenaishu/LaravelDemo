<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexOrderbyDemos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orderby_demos', function (Blueprint $table) {
            $table->index(['city', 'name'], 'idx_city_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orderby_demos', function (Blueprint $table) {
            $table->dropIndex('idx_city_name');
        });
    }
}
