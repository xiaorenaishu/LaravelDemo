<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexDemoTable extends Migration
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
            $table->index('status', 'idx_status');
            $table->index(['create_time', 'update_time', 'status'], 'idx_c_u_status');
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
            $table->dropIndex('idx_status');
            $table->dropIndex('idx_c_u_status');
        });
    }
}
