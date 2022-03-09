<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_berendezes', function (Blueprint $table) {
            $table->id();
            $table->integer ('tipus');
            $table->bigInteger ('uzemid')->references('id')->on('uzem');
            $table->bigInteger ('szenzorid')->references('id')->on('szenzor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_berendezes');
    }
};
