<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateIndexPsiAirtemp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psis', function (Blueprint $table) {
            $table->unique(['timestamp', 'type', 'region'], 'uiq_time_type_region');
        });
        Schema::table('air_temperatures', function (Blueprint $table) {
            $table->unique(['timestamp', 'station_id'], 'uiq_time_station');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('psis', function (Blueprint $table) {
            $table->dropIndex('uiq_time_type_region');
        });
        Schema::table('psis', function (Blueprint $table) {
            $table->dropIndex('uiq_time_station');
        });
    }
}
