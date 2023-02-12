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
        Schema::create('Enviaments', function (Blueprint $table) {
            $table->bigIncrements("idEnviaments");
            $table->foreignId('idOferta')->constrained('ofertas')->references('idOferta');
            $table->foreignId('idAlumne')->constrained('alumnes')->references('idAlumne');
            $table->text('Observacions')->nullable();
            $table->enum("Estat", \App\Enums\Estats::forMigration())->default(\App\Enums\Estats::DEFAULT->value);
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
        Schema::dropIfExists('Enviaments');
    }
};
