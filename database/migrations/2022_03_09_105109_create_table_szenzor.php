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
        Schema::create('table_szenzor', function (Blueprint $table) {
            $table->id();
            $table->string ('nev',100);
            $table->string ('desc',100);
            $table->integer ('KwH');
            $table->integer ('ertek');
            $table->boolean ('running');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_szenzor');
    }
};
