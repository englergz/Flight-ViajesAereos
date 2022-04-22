<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta', function (Blueprint $table) {
            $table->id();
            $table->string('origen', 60)->nullable();
            $table->string('origen_descripcion', 260);
            $table->string('destino', 60)->nullable();
            $table->string('destino_descripcion', 260);
            $table->bigInteger('precio');
            $table->string('foto', 260)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruta');
    }
}
