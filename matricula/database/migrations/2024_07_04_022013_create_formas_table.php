<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formas', function (Blueprint $table) {
            $table->integer('idClase');
            $table->integer('numeroCuenta');
            $table->string('periodo', 4);
            $table->integer('nota')->nullable();
            $table->string('seccion', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formas');
    }
}
