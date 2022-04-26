<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casals', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('data_inici');
            $table->string('data_final');
            $table->integer('n_places');
            $table->bigInteger('id_ciutat')->unsigned();
            $table->foreign('id_ciutat')->references('id')->on('ciutats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casals');
    }
}
