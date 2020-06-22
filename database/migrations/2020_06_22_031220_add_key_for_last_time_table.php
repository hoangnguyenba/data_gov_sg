<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeyForLastTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('last_updates', function (Blueprint $table) {
            $table->string('key')->after('type')->nullable();
            $table->unique(['type', 'key'], 'uiq_type_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('last_updates', function (Blueprint $table) {
            $table->dropColumn('key');
            $table->dropIndex('uiq_type_key');
        });
    }
}
