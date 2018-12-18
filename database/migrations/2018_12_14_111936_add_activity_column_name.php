<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActivityColumnName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activity', function (Blueprint $table) {
            //
            $table->dropColumn('title');
            $table->string('name', 32)->default('');
            $table->index('status', 'idx_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activity', function (Blueprint $table) {
            //
            $table->string('title', 32)->default('');
            $table->dropColumn('name');
            $table->dropIndex('idx_status');
        });
    }
}
