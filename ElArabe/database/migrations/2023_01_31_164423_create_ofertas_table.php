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
        Schema::disableForeignKeyConstraints();
        Schema::create('Ofertas', function (Blueprint $table) {
            $table->bigIncrements("idOferta");
            $table->string("Descripció");
            $table->integer("NombreVacants");
            $table->integer("Curs");
            $table->string("NomContacte");
            $table->string("CognomsContacte");
            $table->string("EmailContacte");
            $table->foreignId('idEstudis')->constrained('estudis')->references('idEstudis');
            $table->foreignId('idEmpresa')->constrained('empresa')->references('idEmpresa');
            $table->timestamps();


        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ofertas');
    }
};
