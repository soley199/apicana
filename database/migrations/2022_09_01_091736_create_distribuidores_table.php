<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribuidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuidores', function (Blueprint $table) {
            $table->id();
            $table->string('distribuidor');
            $table->text('direccion');
            $table->string('RefeEmpresa')->nullable();
            $table->string('Referencia')->nullable();
            $table->string('RefeEmail');
            $table->string('RefeNumero');
            $table->string('RefeSecu')->nullable();
            $table->string('RefeSecuEmail')->nullable();
            $table->string('RefeSecuNumero')->nullable();
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
        Schema::dropIfExists('distribuidores');
    }
}
