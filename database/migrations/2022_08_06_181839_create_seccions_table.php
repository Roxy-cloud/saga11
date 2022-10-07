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
        Schema::create('seccions', function (Blueprint $table) {
                $table->id();
                $table->string('nombre_grado');
                $table->string('grado');
                $table->string('seccion');
                $table->foreignid('anioescolar_id')-> constrained ('anioescolars')->CascadeonDelete();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seccions');
    }
};
