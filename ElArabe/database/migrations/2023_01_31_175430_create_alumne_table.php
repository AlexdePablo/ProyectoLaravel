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
        Schema::create('Alumnes', function (Blueprint $table) {
            $table->bigIncrements("idAlumne");
            $table->string('name', 50);
            $table->string('lastName', 50);
            $table->string("DNI", 9);
            $table->string("curs", 15);
            $table->foreignId("cicle")->nullable()->constrained('estudis')->references('idEstudis');
            $table->string("grup", 1)->nullable();
            $table->string("telefon", 9);
            $table->string('email', 100)->unique();
            $table->foreignId("idTutor")->nullable()->constrained('users')->references('idUsuari');
            $table->boolean("fent_practiques")->default(false);
            $table->string("ruta",100);
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
        Schema::dropIfExists('Alumnes');
    }
};
