<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('clockings', function (Blueprint $table) {
            $table->boolean('using_car')->default(false);
        });
    }

    public function down()
    {
        Schema::table('clockings', function (Blueprint $table) {
            $table->dropColumn('using_car');
        });
    }
};
