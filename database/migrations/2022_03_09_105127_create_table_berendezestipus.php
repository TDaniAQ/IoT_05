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
        Schema::create('table_berendezestipus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger ('berendezesid')->references('id')->on('berendezes');
            $table->string ('desc',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_berendezestipus');
    }
};
