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
        Schema::create('Estudis', function (Blueprint $table) {
            $table->bigIncrements("idEstudis");
            $table->enum("NomModul", \App\Enums\Cicles::forMigration())->default(\App\Enums\Cicles::DEFAULT->value);
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
        Schema::dropIfExists('Estudis');
    }
};
